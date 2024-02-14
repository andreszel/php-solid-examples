<?php

namespace Andrzej\Solid\L\example3;

class Notification
{
    private $message;

    public function __construct($message)
    {
        $this->message = $message;
    }

    public function message()
    {
        return $this->message;
    }
}