<?php

namespace Andrzej\Solid\O\example1;

class AreaCalculation
{
    public function area(IShape $shape): float
    {
        return $shape->area();
    }
}