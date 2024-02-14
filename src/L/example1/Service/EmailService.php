<?php

namespace Andrzej\Solid\L\example1\Service;

class EmailService
{
    private $emailServiceInterface;
    public function __construct(EmailServiceInterface $emailServiceInterface) {
        $this->emailServiceInterface = $emailServiceInterface;
    }

    public function sendMessage(string $to, string $subject, string $message): void
    {
        $this->emailServiceInterface->sendMessage($to, $subject, $message);
    }
}