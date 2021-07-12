<?php


namespace lesson_5\decorator\service;

use lesson_5\decorator\interfaces\NotifyRepositoryInterface;

class NotifyService
{
    private NotifyRepositoryInterface $repository;

    private $notifies = [];
    private ?NotifyService $notify;

    public function __construct(NotifyRepositoryInterface $repository, NotifyService $notify = null)
    {
        $this->notify = $notify;
        $this->repository = $repository;
        $this->notifies = $notify->notifies;
    }

    function sendNotify()
    {
        if ($this->notify) {
            array_push($this->notifies, $this->repository->sendNotify($this->repository->getNotify()));
        } else {
            $this->notifies[] = $this->repository->sendNotify($this->repository->getNotify());
        }
    }

    function showNotifies(): string
    {
        $message = '';
        foreach ($this->notifies as $value) {
            $message .= $value . PHP_EOL;
        }

        return $message;
    }
}