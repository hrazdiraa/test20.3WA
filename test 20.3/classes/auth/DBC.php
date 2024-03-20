<?php

class DBC
{
    private const HOST = "localhost:3306";
    private const USER = "root";
    private const PASSWORD = "1234";
    private const DATABASE = "LoginTest";

    private static $connection;

    protected function __construct()
    {
    }

    public static function getConnection(): ?PDO
    {
        if (!self::$connection) {
            try {
                self::$connection = new PDO(
                    'mysql:host=' . self::HOST . ';dbname=' . self::DATABASE,
                    self::USER,
                    self::PASSWORD
                );
            } catch (PDOException $e) {
                throw new PDOException($e->getMessage(), $e->getCode());
            }
        }
        return self::$connection;
    }
}
