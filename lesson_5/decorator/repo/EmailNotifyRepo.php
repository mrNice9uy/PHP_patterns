<?php


namespace lesson_5\decorator\repo;

use lesson_5\decorator\interfaces\NotifyRepositoryInterface;

class EmailNotifyRepo implements NotifyRepositoryInterface
{
    private string $notify;

    public function __construct($notify)
    {
        $this->notify = $notify;
    }

    function sendNotify($notify): string
    {
        return 'msg' . ' ' . $this->notify . ' ' . 'was sent via Email.';
    }

    public function getNotify(): string
    {
        return $this->notify;
    }
}