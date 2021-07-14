<?php


namespace lesson_6\HandHunter\observer;

use lesson_6\HandHunter\entity\Employee;
use lesson_6\HandHunter\entity\Position;

class PositionObserver
{
    private Employee $user;

    public function __construct($user)
    {
        $this->user = $user;
    }

    public function update(Position $job)
    {
        echo "{$this->user->getName()}, there is a new job '{$job->getTitle()}' Salary: '{$job->getSalary()}'";
    }

    public function getEmployee(): Employee
    {
        return $this->user;
    }
}