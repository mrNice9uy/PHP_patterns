<?php

namespace lesson_6\Payment;

use lesson_6\Payment\entity\Order;
use lesson_6\Payment\paymentMethods\Qiwi;
use lesson_6\Payment\paymentMethods\WebMoney;
use lesson_6\Payment\paymentMethods\Yandex;
use lesson_6\Payment\services\Pay;

spl_autoload_register(function ($className) {
   $className = str_replace("\\", DIRECTORY_SEPARATOR, $className);
   $className = preg_replace('/^Strategy/', '', $className);
   require_once __DIR__ . DIRECTORY_SEPARATOR . $className . '.php';
});

$order1 = new Order(25000, '+79217432829');
$order2 = new Order(4000, '+79217342928');
$order3 = new Order(8000, '+79213472298');

$payment1 = new Pay();
$payment2 = new Pay();
$payment3 = new Pay();

$payment1->proceedPayment(new Qiwi(), $order1);
$payment2->proceedPayment(new WebMoney(), $order2);
$payment3->proceedPayment(new Yandex(), $order3);