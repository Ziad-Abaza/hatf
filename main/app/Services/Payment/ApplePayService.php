<?php
namespace App\Services\Payment;
require_once 'ExternalPhpFilesAppleService/_config.php';
class ApplePayService
{

    public static  function applepayPayment($payment)
    {

        return applepay_payment($payment);
    }


    public static function applePay($vurl)
    {

        return applepay($vurl);
    }
}


?>

