<?php
require "magic.php";
use \Magicmethods\MagicBox;

$magicBox= new MagicBox();

echo $magicBox;
echo "\n";

echo $magicBox("Goodmorning", "Benjamin");
echo "\n";
