<?php

namespace App\Services\Payment;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Clickpaysa\Laravel_package\Facades\paypage;

class ClickPayService
{
    public static function generatePaymentClickPay(Request $request)
    {


        // Validate the incoming request data
        $validatedData = $request->validate([
            'uniqid' => 'required|string|max:255',
            'amount' => 'required|numeric|min:1',
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'required|string|max:20',
            'invoice_number' => 'required|numeric',
            'return_url' => 'required|url',
            'callback_url' => 'required|url',

            'currency' => 'nullable|string|max:255',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'state' => 'nullable|string|max:100',
            'country' => 'nullable|string|size:2',
            'zip' => 'nullable|string|max:20',
            'ip_address' => 'nullable|ip',
            'language' => 'nullable|string|in:en,ar', // Default to 'ar'
        ]);

        $url = 'https://secure.clickpay.com.sa/payment/request';
        $authorization = 'SDJNMBD69G-JJZNN2MJMB-MTTM2WTZZK';

        $payload = [
            "profile_id" =>  45415,
            "tran_type" => "sale",
            "tran_class" => "ecom",
            "cart_id" => $validatedData['uniqid'],
            "cart_currency" => "SAR",
            "cart_amount" => $validatedData['amount'],
            "hide_shipping" => true,
            "cart_description" => "nothing",
            "customer_details" => [
                "name"  => $validatedData['name'],
                "email" => $validatedData['email'],
                "phone" => $validatedData['phone'],
                "street1" => "address street",
                "city" => "riyadh",
                "state" => "riyadh",
                "country" => "SA",
                "zip" => "12345"
                ],
            "callback" => $validatedData['callback_url'] ?? null,
            "return"   => $validatedData['return_url'],
        ];

        $response = Http::withHeaders([
            'authorization' => $authorization,
        ])->post($url, $payload);

        $url = json_decode($response->body());

        return $url->redirect_url;
        // Generate the payment page
        // $pay =  Paypage::sendPaymentCode('all')
        //     ->sendTransaction('sale')
        //     ->sendCart($validatedData['uniqid'],$validatedData['amount'], 'Invoice'.$validatedData['invoice_number'])
        //     ->sendHideShipping(true)
        //     ->sendFramed(true)
        //     ->sendCustomerDetails($validatedData['name'], $validatedData['email'],$validatedData['phone'], 'address', 'Riyadh', 'Riyadh', 'SA', '12345', '10.0.0.10')
        //     // ->sendCustomerDetails(
        //     //     $validatedData['name'],
        //     //     $validatedData['email'],
        //     //     $validatedData['phone']?? '',
        //     //     $validatedData['address']?? '',
        //     //     $validatedData['city']?? '',
        //     //     $validatedData['state']?? '',
        //     //     $validatedData['country']?? '',
        //     //     $validatedData['zip'] ?? '', 
        //     //     $validatedData['ip_address']?? ''
        //     // )
        //     ->sendURLs($validatedData['return_url'], $validatedData['callback_url']?? null)
        //     ->sendLanguage('ar')
        //     ->create_pay_page();

        // return $pay;
    }


    public static function chickTransaction($tran_ref)
    {

        $transaction = Paypage::queryTransaction($tran_ref);
        return $transaction;
    }
}
