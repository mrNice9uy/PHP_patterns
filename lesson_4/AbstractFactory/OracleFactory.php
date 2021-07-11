<?php


namespace lesson_4\AbstractFactory;

use lesson_4\db\Oracle;
use lesson_4\interfaces\DbFactoryInterface;


class OracleFactory implements DbFactoryInterface
{
    private Oracle $connection;

    public function __construct(Oracle $connection)
    {
        $this->connection = $connection;
    }

    public function DBConnection(): Oracle
    {
        return $this->connection;
    }

    public function DBRecord(): bool
    {
        return true;
    }

    public function DBQueryBuilder(): bool
    {
        return true;
    }
}