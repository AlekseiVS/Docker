<?php
require_once ('vendor/autoload.php');

use app\src\Db;
use app\src\Params;

//$request = Db::getInstance(Params::getDbParams());
//$res = $request->executeQuery("SELECT email FROM user");

$res = Db::getInstance(Params::getDbParams())->executeQuery("SELECT email FROM user");


var_dump($res);
