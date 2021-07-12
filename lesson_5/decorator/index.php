<?php

namespace lesson_5\decorator;

use lesson_5\decorator\entity\Notify;
use lesson_5\decorator\repo\EmailNotifyRepo;
use lesson_5\decorator\repo\SMSNotifyRepo;
use lesson_5\decorator\service\NotifyService;

spl_autoload_register(function ($className) {
    $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
    $className = preg_replace('/^decorator/', '', $className);
    require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$notify = new Notify('Hello!');


$notifies = new NotifyService(new EmailNotifyRepo($notify->getText()), $notify);
$notifies->sendNotify();

$notifies = new NotifyService(new SMSNotifyRepo($notify->getText()), $notifies);
$notifies->sendNotify();