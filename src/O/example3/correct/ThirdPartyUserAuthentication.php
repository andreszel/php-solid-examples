<?php

namespace Andrzej\Solid\O\example3\correct;

use Andrzej\Solid\O\example3\Entity\UserInterface;

class ThirdPartyUserAuthentication implements LoginInterface
{
    public function authenticateUser(UserInterface $user): void
    {
        // TODO: ...
        echo "Login - ThirdPartyUserAuthentication - auth  " . $user . "\n";
    }
}