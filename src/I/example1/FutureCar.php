<?php

namespace Andrzej\Solid\I\example1;

class FutureCar implements VehicleDriveInterface, VehicleFlyInterface
{
    public function drive(): void
    {
        echo "Driving a future car!\n";
    }

    public function fly(): void
    {
        echo "Flying a future car!\n";
    }
}