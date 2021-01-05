<?php
require "generators.php";
use Generators\MyGenerator;

foreach (MyGenerator::fizzbuzz(25) as $key=>$val){
    echo ($val?$val:$key)."\n";
}
