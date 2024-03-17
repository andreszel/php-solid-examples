<?php

namespace Andrzej\Solid\O\example2;

class Payment
{
    private PayableInterface $type;

    public function __construct(PayableInterface $type) {
        $this->type = $type;
    }

    public function pay()
    {
        $this->type->pay();
    }
}