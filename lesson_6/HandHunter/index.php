<?php

namespace lesspn_6\HandHunter;

use lesson_6\HandHunter\entity\Employee;
use lesson_6\HandHunter\entity\Position;
use lesson_6\HandHunter\observer\PositionObserver;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
   $className = preg_replace('/^Observer/', '', $className);
   require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$user1 = new Employee('Gilfoyle', 'canadian_man@piper.com', '4');
$user2 = new Employee('Dinesh', 'hate_gilfoyle@piper.com', '4');

$job = new Position('Fullstack', 150000);

$observer1 = new PositionObserver($user1);
$job->attach($observer1);
echo PHP_EOL;

$observer2 = new PositionObserver($user2);
$job->attach($observer2);
echo PHP_EOL;

$job->notify();
$job->detach($observer2);