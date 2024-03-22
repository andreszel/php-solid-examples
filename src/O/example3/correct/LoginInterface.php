<?php

namespace Andrzej\Solid\O\example3\correct;

use Andrzej\Solid\O\example3\Entity\UserInterface;

interface LoginInterface
{
    public function authenticateUser(UserInterface $user): void;
}