<?php

namespace App\Http\Controllers\Web;


use Carbon\Carbon;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Mail\InvoiceNotification;
use Illuminate\Support\Facades\Log;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;
use App\Services\Payment\ClickPayService;

class PaymentController extends Controller
{

    /**
     * display invoice action action after payment.
     */



    public function validateMerchant(Request $request)
    {
        $validationURL = $request->input('vurl');

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $validationURL);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSLCERT, storage_path(config('app.APPLEPAY_CERT_FILE')));
        curl_setopt($ch, CURLOPT_SSLKEY, storage_path(config('app.APPLEPAY_CERT_KEY_FILE')));
        curl_setopt($ch, CURLOPT_SSLCERTPASSWD, config('app.APPLEPAY_CERT_PASSWORD', ''));

        $response = curl_exec($ch);
        curl_close($ch);

        return response()->json(json_decode($response, true));
    }

    public function authorizePayment(Request $request)
    {
        $paymentToken = $request->input('token');

        // Add payment authorization logic here...

        return response()->json(['success' => true, 'result' => ['message' => 'Payment Authorized']]);
    }

    public function show(Payment $invoice)
    {

        if ($invoice->status == 1) {
            return view('errors.404');
        }
        
        $uniqid = uniqid();
        $invoice->update(['uniqid' => $uniqid]);
        $request = [
            'uniqid' => $uniqid,
            'amount' => $invoice->amount,
            'name' => $invoice->name,
            'email' => $invoice->email,
            'phone' => $invoice->phone,
            'invoice_number' => $invoice->invoice_number,
            'return_url' => route('return_url'),
            'callback_url' => route('callback_url'),
        ];

        $url = ClickPayService::generatePaymentClickPay(new Request($request));

        // Load configuration values from .env
        $countryCode = config('app.APPLEPAY_COUNTRY_CODE', 'SA');
        $currency = config('app.APPLEPAY_CURRENCY', 'SAR');
        $amount = config('app.APPLEPAY_AMOUNT', $invoice->amount);

        // Pass data to Blade view
        return view('web.page.invoices.show', [
            'invoice' => $invoice,
            'url' => $url,
            'countryCode' => $countryCode,
            'currency' => $currency,
            'amount' => $amount
        ]);
    }



    /**
     * callBack action after payment.
     */


    public function return_url()
    {
        // Log request data for debugging
        Log::channel('return_url')->info('Request received at return_url', [
            'time' => now(),
            'request_data' => request()->all(),
        ]);

        try {
            // Validate request data
            $data = request()->all();
            if (!isset($data['tranRef'], $data['cartId'])) {
                return $this->renderResult(null, 400, 'حدث خطأ حاول وقت لاحق');
            }

            // Check transaction status using ClickPay service
            $tranRefResponse = ClickPayService::chickTransaction($data['tranRef']);
            $responseStatus = $tranRefResponse->payment_result->response_status ?? null;

            // Find payment record
            $payment = Payment::where('uniqid', $data['cartId'])->firstOrFail();

            if ($responseStatus === "A") {
                // Successful payment
                $payment->update([
                    'status' => '1',
                    'transaction_number' => $data['tranRef'],
                     'updated_at' => Carbon::now(),

                ]);



                return $this->renderResult($data['tranRef'], 200, 'عملية دفع ناجحة');
            } else {
                // Failed payment
                $this->handleFailedPayment($payment, $data['tranRef']);
                return $this->renderResult($data['tranRef'], 400, 'فشل فى عملية الدفع حاول مرة اخرى');
            }
        } catch (\Throwable $th) {
            // Log error details for debugging
            Log::channel('return_url')->error('Error in return_url', [
                'time' => now(),
                'error_message' => $th->getMessage(),
                'request_data' => request()->all(),
            ]);

            // Handle unexpected errors
            if (isset($data['cartId'], $data['tranRef'])) {
                $payment = Payment::where('uniqid', $data['cartId'])->first();
                if ($payment) {
                    $this->handleFailedPayment($payment, $data['tranRef']);
                }
            }

            return $this->renderResult('غير متاح', 400, 'فشل فى عملية الدفع حاول مرة اخرى');
        }
    }

    /**
     * Render result view with provided data.
     */
    private function renderResult(string $tranRef = null, int $code, string $message)
    {
        Mail::to(['hatfpfp@gmail.com', 'Info@hatf.sa', 'islamm1995@gmail.com'])->send(new InvoiceNotification($tranRef, $code, $message));

        return view('web.page.invoices.result', [
            'tranRef' => $tranRef,
            'code' => $code,
            'message' => $message,
        ]);
    }

    /**
     * Handle failed payment updates.
     */
    private function handleFailedPayment(Payment $payment, string $tranRef)
    {
        $payment->update([
            'status' => '2',
            'transaction_number' => $tranRef,
            'failed_attempts' => $payment->failed_attempts + 1,
            'updated_at' => Carbon::now(),
        ]);
    }




    public function callback_url()
    {
        $data = ClickPayService::chickTransaction(request('tran_ref'));

        // Use the custom log channel
        Log::channel('return_url')->info('Request callback_url received at return_url', [
            'time' => now(),
            'request_data' => request()->all(),
        ]);

        // Log all incoming request data
        Log::channel('return_url')->info('Request callback_url received at return_url', [
            'time' => now(),
            'full_url' => request()->fullUrl(),        // Logs the full URL with query parameters
            'headers' => request()->headers->all(),   // Logs all headers
            'payload' => request()->all(),           // Logs all incoming data (query and POST data)
            'method' => request()->method(),         // Logs the HTTP method (GET, POST, etc.)
            'ip' => request()->ip(),                 // Logs the IP address of the request
        ]);

        // Validate the redirect
        if (!$this->is_valid_redirect(request()->all())) {
            Log::channel('return_url')->warning('Invalid callback_url redirect attempt', [
                'time' => now(),
                'request_data' => request()->all(),
                'message' => 'failedPayment1',
            ]);
            return 'failedPayment1';
        }

        $respStatus = request('respStatus');

        if ($respStatus == "A") {
            // Log successful payment
            Log::channel('return_url')->info('Successful  callback_url callback_url payment', [
                'time' => now(),
                'request_data' => request()->all(),
                'message' => 'success',
            ]);

            $data = ClickPayService::chickTransaction(request('tran_ref'));
            if ($data->success == true) {
                Payment::where('uniqid', request('cartId'))->update([
                    'status' => '1',
                    'transaction_number' => request('tran_ref'),
                    'address' => $data->customer_details->city,
                    'city' => $data->customer_details->city,
                    'country' => $data->customer_details->country,
                    'state' => $data->customer_details->state,
                    'ip_address' => $data->customer_details->ip,
                ]);
            }

            return redirect()->route('successPayment');
        } else {
            // Log failed payment
            Log::channel('return_url')->error('Failed callback_url payment', [
                'time' => now(),
                'request_data' => request()->all(),
                'message' => 'failedPayment2',
            ]);
            return 'failedPayment2';
        }
    }


    function is_valid_redirect($post_values)
    {
        if (empty($post_values) || !array_key_exists('signature', $post_values)) {
            return false;
        }

        $serverKey = config('clickpay.server_key');

        // Request body include a signature post Form URL encoded field
        // 'signature' (hexadecimal encoding for hmac of sorted post form fields)
        $requestSignature = $post_values["signature"];
        unset($post_values["signature"]);
        $fields = array_filter($post_values);

        // Sort form fields
        ksort($fields);

        // Generate URL-encoded query string of Post fields except signature field.
        $query = http_build_query($fields);

        return $this->is_genuine($query, $requestSignature, $serverKey);
    }


    function updateCartByIPN($requestData)
    {
        $cartId = $requestData->getCartId();
        $status = $requestData->getStatus();
        //your logic .. updating cart in DB, notifying the customer ...etc
    }
}
