<?php

namespace Andrzej\Solid\O\example3\Entity;

class User implements UserInterface
{
    public function __toString()
    {
        $parts = explode("\\", __CLASS__);
        return end($parts);
        //return array_pop($parts);
        //return array_reverse($parts)[0];
    }
}
