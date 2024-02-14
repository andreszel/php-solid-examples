<?php

namespace Andrzej\Solid\O\example1;

class Triangle implements IShape
{
    private float $base;
    private float $height;

    public function __construct(float $base, float $height) {
        $this->base = $base;
        $this->height = $height;
    }

    public function area(): float
    {
        return 0.5 * $this->base * $this->height;
    }
}