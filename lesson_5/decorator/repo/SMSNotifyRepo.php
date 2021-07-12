<?php


namespace lesson_5\decorator\repo;

use lesson_5\decorator\interfaces\NotifyRepositoryInterface;

class SMSNotifyRepo implements NotifyRepositoryInterface
{
    private string $notify;

    public function __construct($notify)
    {
        $this->notify = $notify;
    }

    function sendNotify($notify): string
    {
        return 'Msg' . ' ' . $this->notify . ' ' . 'was sent via SMS.';
    }

    public function getNotify(): string
    {
        return $this->notify;
    }
}