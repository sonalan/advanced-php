<?php
include __DIR__."/../vendor/autoload.php";
include  "namespaces/app/log.php";
include  "namespaces/db/log.php";

use \Rych\Random\Random;

use \App\Log as AppLog;
use \Db\Log as DbLog;


$appLog= new AppLog();
$appLog->setLog("app started");

$dbLog= new DbLog();
$dbLog->setLog("db connected");

echo (new Random())->getRandomInteger(1,5);
echo "\n";

