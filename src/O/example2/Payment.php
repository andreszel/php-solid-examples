<?php

namespace Andrzej\Solid\O\example2;

class Payment
{
    private IPayable $type;

    public function __construct(IPayable $type) {
        $this->type = $type;
    }

    public function pay()
    {
        $this->type->pay();
    }
}