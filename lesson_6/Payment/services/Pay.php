<?php


namespace lesson_6\Payment\services;

use lesson_6\Payment\entity\Order;
use lesson_6\Payment\interfaces\PaymentInterface;

class Pay
{
    private bool $isSuccess;

    public function __construct()
    {
        $this->isSuccess = false;
    }

    public function proceedPayment(PaymentInterface $payMethod, Order $order)
    {
        if (!$order->isPaid() && !$this->isSuccess)
        {
            $payMethod->proceedPayment($order);
            $order->setStatus(true);
            $this->isSuccess = true;
        } else echo 'Already paid';
    }
}