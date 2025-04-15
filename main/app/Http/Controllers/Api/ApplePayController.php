<?php

namespace App\Http\Controllers\Api;

use Carbon\Carbon;
use App\Models\Payment;
use Illuminate\Http\Request;
use App\Mail\InvoiceNotification;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Mail;


class ApplePayController
{
    /**
     * Callback action after payment.
     */
    public function returnUrl(Request $request)
    {

        // Log the request initiation for debugging
        Log::channel('return_url')->info('Request received at return_url', [
            'time' => now(),
            'request_data' => request()->all(),
        ]);
        
            if (isset($request['result'])) {
                Log::channel('return_url')->warning('result payment success', ['result' =>$request['result']]);
            }
        

        try {

            if (!isset($request['id'])) {
                Log::channel('return_url')->warning('Cart ID is missing in request', ['data' => $request['id']]);
                return $this->renderResult(null, 400, 'حدث خطأ حاول وقت لاحق');

            }

            // Find payment record
            $payment = Payment::where('uniqid',$request['id'])->firstOrFail();

            Log::channel('return_url')->info('Payment record found', ['payment' => $payment]);

            if ($payment) {
                // Successful payment
                Log::channel('return_url')->info('Processing successful payment', ['cartId' => $request['id']]);

                $payment->update([
                    'status' => '1'
                ]);

                Log::channel('return_url')->info('Payment status updated to successful', ['payment' => $payment]);

                return $this->renderResult($request['id'], 200, 'عملية دفع ناجحة');
            } else {
                // Failed payment
                Log::channel('return_url')->warning('Payment processing failed', ['cartId' => $request['id']]);
                $this->handleFailedPayment($payment, $request['id']);
                return $this->renderResult($request['id'], 400, '2فشل فى عملية الدفع حاول مرة اخرى');
            }
        } catch (\Throwable $th) {
            // Log error details for debugging
            Log::channel('return_url')->error('Error occurred in return_url', [
                'time' => now(),
                'error_message' => $th->getMessage(),
                'request_data' => request()->all(),
            ]);

            // Handle unexpected errors
            if (isset($data['cartId'])) {
                $payment = Payment::where('id', $request['id'])->first();
                if ($payment) {
                    Log::channel('return_url')->warning('Handling failed payment due to exception', ['cartId' => $request['id']]);
                    $this->handleFailedPayment($payment, $request['id']);
                }
            }

            return $this->renderResult('غير متاح', 400, '1فشل فى عملية الدفع حاول مرة اخرى');
        }
    }

    /**
     * Render result view with provided data.
     */
    private function renderResult(string $tranRef = null, int $code, string $message)
    {

        
        
        Log::channel('return_url')->info('Rendering result view', [
            'tranRef' => $tranRef,
            'code' => $code,
            'message' => $message,
        ]);

        // Send notification email
        Mail::to(['hatfpfp@gmail.com', 'Info@hatf.sa', 'islamm1995@gmail.com'])->send(new InvoiceNotification($tranRef, $code, $message));
        Log::channel('return_url')->info('Notification email sent', ['emails' => ['hatfpfp@gmail.com', 'Info@hatf.sa', 'islamm1995@gmail.com']]);

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
        Log::channel('return_url')->info('Updating failed payment status', [
            'payment_id' => $payment->id,
            'cartId' => $tranRef,
        ]);

        $payment->update([
            'status' => '2',
            'transaction_number' => $tranRef,
            'failed_attempts' => $payment->failed_attempts + 1,
            'updated_at' => Carbon::now(),
        ]);

        Log::channel('return_url')->info('Failed payment status updated', ['payment' => $payment]);
    }
}
