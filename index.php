<?php
require_once ('vendor/autoload.php');

use App\src\Db;
use App\src\Params;

$res = Db::getInstance(Params::getDbParams())->executeQuery("SELECT email FROM user");

var_dump($res);
