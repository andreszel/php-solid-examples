<?php

namespace Andrzej\Solid\S\example1;

use Andrzej\Solid\S\example1\Entity\User;

class UserRegistration
{
    public function __construct(
        private RegisterStorageInterface $storage,
        private RegisterEmailInterface $email
    ) {
    }

    public function register(User $user): void
    {
        $this->storage->save($user);
        $this->email->sendTo($user);
    }
}