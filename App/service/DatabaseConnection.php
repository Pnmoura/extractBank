<?php

declare(strict_types=1);

namespace extractBank\App\service;

use PDO;
use PDOStatement;

class DatabaseConnection
{
    private static $instance = null;
    private $connection;
    private const HOST = 'localhost:3306';
    private const USER = 'root';
    private const PASSWORD = 'theo@071020';
    private const DATABASE = 'extractBank';

    private function __construct()
    {
        $dsn = "mysql:host=" . self::HOST . ";dbname=" . self::DATABASE;
        $this->connection = new PDO($dsn, self::USER, self::PASSWORD);
    }

    public static function getInstance(): DatabaseConnection
    {
        if (self::$instance == null) {
            self::$instance = new DatabaseConnection();
        }
        return self::$instance;
    }

    public function executeQuery(string $sql): bool|PDOStatement
    {
        return $this->connection->query($sql);
    }

    public function getConnection() {
        return $this->connection;
    }

    public function disconnect(): void
    {
        $this->connection = null;
    }
}
