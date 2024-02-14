<?php

namespace Andrzej\Solid\D\example1;

interface DatabaseInterface
{
    public function get(): void;
    public function add(): void;
    public function update(): void;
    public function delete(): void;
}