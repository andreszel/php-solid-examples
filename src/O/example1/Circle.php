<?php

namespace Andrzej\Solid\O\example1;

class Circle implements ShapeInterface
{
    private float $radius;

    public function __construct(float $radius) {
        $this->radius = $radius;
    }

    public function area(): float
    {
        return pi() * pow($this->radius, 2);
    }
}