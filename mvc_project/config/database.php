<?php
class Database {
    private static $host = "localhost";
    private static $dbname = "mvc_project";
    private static $username = "root";
    private static $password = "Gxaetmgio2000";
    private static $connection;

    public static function connect() {
        if (!self::$connection) {
            self::$connection = new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$dbname,
                self::$username,
                self::$password
            );
            self::$connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        return self::$connection;
    }
}
