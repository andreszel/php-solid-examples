<?php

namespace Andrzej\Solid\L\example2;

use InvalidArgumentException;

class AreaCalculator
{
    public function getTotalArea(array $shapes): float
    {
        $totalArea = 0;

        foreach($shapes as $shape) {
            if(!$shape instanceof ShapeInterface) {
                throw new InvalidArgumentException('Invalid shape provided.');
            }

            $totalArea += $shape->area();
        }

        return $totalArea;
    }
}