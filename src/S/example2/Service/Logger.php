<?php

namespace Andrzej\Solid\S\example2\Service;

class Logger
{
    public function writeToFile(string $message): void
    {
        echo "Save log to file!\n";
    }
}