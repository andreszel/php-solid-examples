<?php

namespace Andrzej\Solid\O\example3\correct;

use Andrzej\Solid\O\example3\Entity\UserInterface;

class UserAuthentication implements LoginInterface
{
    public function authenticateUser(UserInterface $user): void
    {
        // TODO: ...
        echo "Login - UserAuthentication - auth " . $user . "\n";
    }
}