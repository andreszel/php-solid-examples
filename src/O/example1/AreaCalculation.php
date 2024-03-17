<?php

namespace Andrzej\Solid\O\example1;

class AreaCalculation
{
    public function area(ShapeInterface $shape): float
    {
        return $shape->area();
    }
}