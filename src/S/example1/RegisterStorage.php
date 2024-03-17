<?php

namespace Andrzej\Solid\S\example1;

use Andrzej\Solid\S\example1\Entity\User;

class RegisterStorage implements RegisterStorageInterface
{
    public function save(User $user): void
    {
        # code save user registering now...
        echo "Save register User!\n";
    }
}