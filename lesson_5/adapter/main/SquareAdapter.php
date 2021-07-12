<?php


namespace lesson_5\adapter\main;

use lesson_5\adapter\interfaces\ISquare;
use lesson_5\adapter\libs\SquareAreaLib;


class SquareAdapter implements ISquare
{
    function squareArea(int $sideSquare)
    {
        $diagonal = sqrt(2) * $sideSquare;
        $squareArea = new SquareAreaLib();
        return $squareArea->getSquareArea($diagonal);
    }
}