<?php

namespace App\src;

class Hello
{
    public function __invoke(string $string)
    {
        echo "\n{$string}\n------------\n";
    }
}