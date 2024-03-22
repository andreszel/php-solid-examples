<?php

namespace Andrzej\Solid\O\example3\correct;

use Andrzej\Solid\O\example3\Entity\UserInterface;

class LoginService
{
    public function login(LoginInterface $loginService, UserInterface $user)
    {
        $loginService->authenticateUser($user);
    }
}