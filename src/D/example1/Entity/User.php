<?php

namespace Andrzej\Solid\D\example1\Entity;

class User
{
    private string $name;
    private string $lastname;
    private string $email;

    public function __construct($name, $lastname, $email) {
        $this->name = $name;
        $this->lastname = $lastname;
        $this->email = $email;
    }
}