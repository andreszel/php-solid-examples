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

    public function about(): void
    {
        echo __CLASS__." - calculating area! Side = " . $this->side . ", area = " . $this->area() . "\n";
    }
}