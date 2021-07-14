<?php


namespace lesson_6\HandHunter\entity;

use SplObserver;

class Position implements \SplSubject
{
    private $title;
    private $salary;
    private \SplObjectStorage $observers;

    public function __construct($title, $salary)
    {
        $this->title = $title;
        $this->salary = $salary;
        $this->observers = new \SplObjectStorage();
    }

    public function attach(SplObserver $observer)
    {
        $user = $observer->getUser();
        echo "User {$user->getName()} subscribed to job notifications {$this->title}.";
        $this->observers->attach($observer);
    }

    public function detach(SplObserver $observer)
    {
        $user = $observer->getUser();
        echo "User {$user->getName()} unsubscribed from job notifications {$this->title}.";
        $this->observers->detach($observer);
    }

    public function notify()
    {
        foreach ($this->observers as $observer)
        {
            $observer->update($this);
        }
    }

    public function getTitle()
    {
        return $this->title;
    }

    public function getSalary()
    {
        return $this->salary;
    }
}
