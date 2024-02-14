<?php

namespace Andrzej\Solid\I\example1;

class Car implements VehicleDriveInterface
{
    public function drive(): void
    {
        echo "Driving a car!\n";
    }
}