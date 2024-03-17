<?php

namespace Andrzej\Solid\O\example2;

use Exception;

class PaymentFactory
{
    public function initializePayment(string $type): PayableInterface
    {
        if ($type == 'credit') {
            return new CreditCardPayment();
        }elseif ($type == 'paypal') {
            return new PaypalPayment();
        }elseif ($type == 'wire') {
            return new WirePayment();
        }

        throw new Exception("Unsupported payment method!");
    }
}