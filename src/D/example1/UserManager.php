<?php

namespace Andrzej\Solid\D\example1;

final class UserManager
{
    private $database;

    public function __construct(DatabaseInterface $database)
    {
        $this->database = $database;
    }

    public function add(): void
    {
        $this->database->add();
    }
}