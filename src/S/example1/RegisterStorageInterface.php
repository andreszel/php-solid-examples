<?php

namespace Andrzej\Solid\S\example1;

use Andrzej\Solid\S\example1\Entity\User;

interface RegisterStorageInterface
{
    public function save(User $user): void;
}