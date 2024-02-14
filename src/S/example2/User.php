<?php

namespace Andrzej\Solid\S\example2;

use Andrzej\Solid\S\example2\Service\Logger;
use Exception;

class User
{
    public function __construct(private Logger $logger) {
    }

    public function create(array $data)
    {
        try {
            echo "\nSave user to database!\n";
        } catch (Exception $e) {
            // bad
            //$this->writeLogErrorToFile($e->getMessage());
            // good
            $this->logger->writeToFile($e->getMessage());
        }
    }

    public function writeLogErrorToFile($message)
    {
        echo "Write log error to file, no separated function!\n";
    }
}