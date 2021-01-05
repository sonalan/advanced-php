<?php
require "iterators.php";

$file_path=__DIR__. "/./sample_data.csv";

$iterator= new \Iterators\CsvIterator(new SplFileObject($file_path));

foreach ($iterator as $key=>$row){
    var_dump($row);
}


