<?php

namespace Andrzej\Solid\L\example2;

class Square implements ShapeInterface
{
    protected $side;

    public function __construct(float $side)
    {
        $this->side = $side;
    }

    public function area(): float
    {
        return $this->side**2;
    }
}