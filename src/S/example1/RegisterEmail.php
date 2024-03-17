<?php

namespace Andrzej\Solid\S\example1;

use Andrzej\Solid\S\example1\Entity\User;

class RegisterEmail implements RegisterEmailInterface
{
    public function sendTo(User $user): void
    {
        # code send email to user...
        echo "Send email to register User!\n";
    }
}