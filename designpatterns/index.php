<?php
namespace DesignPatterns;
require "singleton.php";
require "databases/mysql.php";

use \DesignPatterns\Singleton;
use \DesignPatterns\Databases\Mysql;

$singleton= Singleton::getInstance();

echo $singleton->connect();
echo "\n";

$db = new Mysql();


