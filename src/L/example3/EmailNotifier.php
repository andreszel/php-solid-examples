<?php

namespace Andrzej\Solid\L\example3;

class EmailNotifier implements NotifierInterface
{
    private $notification;

    public function __construct(Notification $notification)
    {
        $this->notification = $notification;
    }

    public function send($to)
    {
        // Email Logic Here
        echo "Send Email Notifier!\nMessage text: " . $this->notification->message() . "\n\n";
    }
}