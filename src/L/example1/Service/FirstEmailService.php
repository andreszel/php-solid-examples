<?php

namespace Andrzej\Solid\L\example1\Service;

class FirstEmailService implements EmailServiceInterface
{
    public function sendMessage(string $to, string $subject, string $message): void
    {
        echo "Send Message, but service is " . __FILE__ . "\n";
        echo "Method: " . __METHOD__ . "\n";
        echo "Line: " . __LINE__;
    }
}