<?php

namespace Andrzej\Solid\O\example3\fail;

class LoginService
{
    public function login($user)
    {
        if ($user instanceof User)
        {
            $this->authenticateUser($user);
        }
        elseif ( $user instanceof ThirdPartyUser )
        {
            $this->authenticateThirdPartyUser($user);
        }
    }

    private function authenticateUser(User $user)
    {

    }

    private function authenticateThirdPartyUser(User $user)
    {

    }
}

class User
{
    
}

class ThirdPartyUser
{

}