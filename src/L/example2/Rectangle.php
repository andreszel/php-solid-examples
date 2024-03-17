<?php

namespace Andrzej\Solid\L\example2;

class Rectangle implements ShapeInterface
{
    protected $width;
    protected $height;

    public function __construct(float $width, float $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area(): float
    {
        return $this->width * $this->height;
    }

    public function about(): void
    {
        echo __CLASS__." - calculating area! Width: " . $this->width . ", height: " . $this->height . ", area = " . $this->area() . "\n";
    }
}