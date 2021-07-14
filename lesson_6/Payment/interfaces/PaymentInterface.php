<?php


namespace lesson_6\Payment\interfaces;

use lesson_6\Payment\entity\Order;

interface PaymentInterface
{
    public function proceedPayment(Order $order);
}