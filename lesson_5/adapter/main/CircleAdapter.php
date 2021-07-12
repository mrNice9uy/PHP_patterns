<?php


namespace lesson_5\adapter\main;

use lesson_5\adapter\interfaces\ICircle;
use lesson_5\adapter\libs\CircleAreaLib;


class CircleAdapter implements ICircle
{

    function circleArea(int $circumference)
    {
        $diagonal = $circumference / M_PI;
        $circleArea = new CircleAreaLib();
        return $circleArea->getCircleArea($diagonal);
    }
}