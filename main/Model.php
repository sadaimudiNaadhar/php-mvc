<?php

namespace Main;

use PDO;
use Main\Config;

abstract class Model
{

    protected static $dbInstanace;
    protected $db;

    /**
     * Get the PDO database connection
     *
     * @return mixed
     */
    public function __construct()
    {
        if (!$this->db) {
            $dsn = 'mysql:host=' . Config::DB_HOST . ';dbname=' . Config::DB_NAME . ';charset=utf8';
            $this->db = new PDO($dsn, Config::DB_USER, Config::DB_PASSWORD);

            // Throw an Exception when an error occurs
            $this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }

        self::$dbInstanace = $this->db;
    }

    /**
     * Get the PDO database connection
     *
     * @return Mysqli instance
     */
    protected static function getDbInstance()
    {
        return self::$dbInstanace;
    }
}
