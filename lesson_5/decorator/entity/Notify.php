<?php


namespace lesson_5\decorator\entity;


class Notify
{
    private $text;

    public function __construct($text)
    {
        $this->text = $text;
    }

    public function getText(): string
    {
        return $this->text;
    }

}