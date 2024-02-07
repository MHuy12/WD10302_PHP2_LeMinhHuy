<?php

namespace src\Models;

use PDO;
use PDOException;

class Database
{
    private static $dbHost = 'localhost';

    private static $dbName = 'php2';

    private static $dbUser = 'root';

    private static $dbPassword = 'mysql';

    private static $dbPort = '3306';


    public function PdO()
    {
        try {
            $conn = new PDO("mysql:host=" . self::$dbHost . ";dbname=" . self::$dbName, self::$dbUser, self::$dbPassword);
            // set the PDO error mode to exception
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            
            return $conn;
        } catch (PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    }


    

}