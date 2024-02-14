<?php

namespace Andrzej\Solid\O\example2;

class PaypalPayment implements IPayable
{
    public function pay()
    {
        echo "Initialize paypal payment!\n";
    }
}