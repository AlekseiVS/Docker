<?php

namespace app\src;

class Hello
{
    public function __invoke(string $string)
    {
        echo "\n{$string}\n";
    }
}