<?php

namespace lesson_5\adapter;

use lesson_5\adapter\main\CircleAdapter;
use lesson_5\adapter\main\SquareAdapter;

spl_autoload_register(function ($className) {
   $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
   $className= preg_replace('/^adapter/', '', $className);
   require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$circle = new CircleAdapter();
$square = new SquareAdapter();