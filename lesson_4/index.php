<?php

namespace lesson_4;

use lesson_4\db\MySQL;
use lesson_4\db\Oracle;
use lesson_4\AbstractFactory\MySQLFactory;
use lesson_4\AbstractFactory\OracleFactory;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^AbstractFactory/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});
$mysql = new MySQL();
$oracle = new Oracle();
$db1 = new MySQLFactory($mysql);
$db2 = new OracleFactory($oracle);