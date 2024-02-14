<?php

namespace Andrzej\Solid\L\example1\Service;

interface EmailServiceInterface
{
    public function sendMessage(string $to, string $subject, string $message): void;
}