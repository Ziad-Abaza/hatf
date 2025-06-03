<?php

namespace App\Services;

use App\Models\Payment;
use App\Models\Commission;

class CommissionService
{
    /**
     * calculate commission for a payment
     *
     * @param Payment $payment
     * @return void
     */
    public function calculateCommission(Payment $payment): void
    {
        // check if the payment has a customer and if the customer has a marketeer
        if (!$payment->customer || !$payment->customer->marketeer) {
            return;
        }

        // get the marketeer of the customer
        $marketeer = $payment->customer->marketeer;

        // check if the marketeer has a commission rate and if the commission rate is greater than 0
        $commissionAmount = ($payment->amount * $marketeer->commission_rate) / 100;

        // create a new commission record
        Commission::create([
            'marketeer_id' => $marketeer->id,
            'payment_id'   => $payment->id,
            'amount'       => $commissionAmount,
        ]);
    }
}
