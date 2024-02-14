<?php

namespace Andrzej\Solid\L\example3;

class SMSNotifier implements NotifierInterface
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send($to)
    {
        // SMS Logic Here
        echo "Send SMS Notifier! \n\n";
    }
}