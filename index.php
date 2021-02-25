<?php
require_once ('vendor/autoload.php');

use App\src\Db;
use App\src\Params;
use App\src\Hello;
use App\src\test\Test;

$hello = new Hello();
$hello('Hello!');

$test = new Test();
$test->getClassName();

$res = Db::getInstance(Params::getDbParams())->executeQuery("SELECT email FROM user");

var_dump($res);
