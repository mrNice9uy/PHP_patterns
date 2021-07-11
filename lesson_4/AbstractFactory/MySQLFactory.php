<?php


namespace lesson_4\AbstractFactory;

use lesson_4\db\MySQL;
use lesson_4\interfaces\DbFactoryInterface;

class MySQLFactory implements DbFactoryInterface
{
    private MySQL $connection;

    public function __construct(MySQL $connection)
    {
        $this->connection = $connection;
    }

    public function DBConnection(): MySQL
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