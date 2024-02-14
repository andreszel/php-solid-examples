<?php

namespace Andrzej\Solid\D\example1;

class PostgresSQLDatabase implements DatabaseInterface
{
    public function get(): void
    {
        echo "Execute query - get data from PostgresSQL!\n";
    }

    public function add(): void
    {
        echo "Execute query - add data to PostgresSQL!\n";
    }

    public function update(): void
    {
        echo "Execute query - update data to PostgresSQL!\n";
    }

    public function delete(): void
    {
        echo "Execute query - delete data from PostgresSQL!\n";
    }
}