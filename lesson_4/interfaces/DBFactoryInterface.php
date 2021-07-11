<?php


namespace lesson_4\interfaces;


interface DBFactoryInterface
{
    public function DBConnection();

    public function DBRecord();

    public function DBQueryBuilder();

}