<?php

namespace Andrzej\Solid\D\example1;

class MysqlDatabase implements DatabaseInterface
{
    public function get(): void
    {
        echo "Execute query - get data from MySQL!\n";
    }

    public function add(): void
    {
        echo "Execute query - add data to MySQL!\n";
    }

    public function update(): void
    {
        echo "Execute query - update data to MySQL!\n";
    }

    public function delete(): void
    {
        echo "Execute query - delete data from MySQL!\n";
    }
}