<?php


namespace lesson_6\Payment\paymentMethods;

use lesson_6\Payment\entity\Order;
use lesson_6\Payment\interfaces\PaymentInterface;

class Qiwi implements PaymentInterface
{
    public function proceedPayment(Order $order)
    {
        echo "Order amount: {$order->getSum()}. Paid with Qiwi";
    }
}