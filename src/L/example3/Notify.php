<?php

namespace Andrzej\Solid\L\example3;

class Notify
{
    private $notifier;

    public function send(NotifierInterface $notifier)
    {
        $this->notifier = $notifier;

        return $this;
    }

    public function to(string $to)
    {
        return $this->notifier->send($to);
    }
}