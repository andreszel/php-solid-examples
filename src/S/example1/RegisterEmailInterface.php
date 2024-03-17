<?php

namespace Andrzej\Solid\S\example1;

use Andrzej\Solid\S\example1\Entity\User;

interface RegisterEmailInterface
{
    public function sendTo(User $user): void;
}