<?php

namespace App;

class Database
{
    private static $connection;

    public static function connect()
    {
        if (!self::$connection) {
            $config = require 'config.php';
            $dsn = 'mysql:host=' . $config['database']['host'] . ';dbname=' . $config['database']['dbname'];
            $options = [
                \PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION,
                \PDO::ATTR_DEFAULT_FETCH_MODE => \PDO::FETCH_ASSOC,
            ];

            self::$connection = new \PDO($dsn, $config['database']['username'], $config['database']['password'], $options);
        }

        return self::$connection;
    }
}
