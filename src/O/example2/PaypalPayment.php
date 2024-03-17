<?php

namespace Andrzej\Solid\O\example2;

class PaypalPayment implements PayableInterface
{
    public function pay()
    {
        echo "Initialize paypal payment!\n";
    }
}