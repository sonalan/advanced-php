<?php
require "table.php";
use \Interfaces\Table as MyTable;

$table = new MyTable();
$table->save(["name","last_name","email@sample.com"]);
