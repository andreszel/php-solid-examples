<?php

namespace Andrzej\Solid\O\example2;

class CreditCardPayment implements PayableInterface
{
    public function pay()
    {
        echo "Initialize credit card payment!\n";
    }
}