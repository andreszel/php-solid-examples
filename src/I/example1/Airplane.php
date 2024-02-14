<?php

namespace Andrzej\Solid\I\example1;

class Airplane implements VehicleFlyInterface
{
    public function fly(): void
    {
        echo "Flying an airplane!\n";
    }
}