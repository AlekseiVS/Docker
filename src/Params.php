<?php

namespace App\src;

class Params
{
    private static $dbParams = [
        'driver' => 'mysql',
        'host' => 'mysql',
        'dbname' => 'app',
        'user' => 'root',
        'password' => 'root',
    ];

    static function getDbParams(): array
    {
        return self::$dbParams;
    }
}