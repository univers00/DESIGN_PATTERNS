<?php
namespace App;
require_once __DIR__.'/../vendor/autoload.php';

class DataBase
{
    public static DataBase $instance;

    protected function __construct()
    {
       // echo "I'm the first and the last";
    }
    public static function getInstance(): DataBase
    {
        if (!isset(self::$instance))
        {
            //echo static::class;
            return self::$instance = new self();

        }
        return self::$instance;

    }
}

$query0 = DataBase::getInstance();
$query1 = DataBase::getInstance();

if ($query0 === $query1) {
    echo "Singleton works, both variables contain the same instance.";
} else {
    echo "Singleton failed, variables contain different instances.";
}