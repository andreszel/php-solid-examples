<?php

namespace Andrzej\Solid\O\example2;

class WirePayment implements IPayable
{
    public function pay()
    {
        echo "Initialize wire payment!\n";
    }
}