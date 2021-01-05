<?php
namespace Generators;

class MyGenerator{

    public static function fizzbuzz($limit){
        $i=1;
        while($i<$limit){
            $yield= null;
            if($i%3==0){
                $yield="fizz";
            }
            if($i%5==0){
                $yield.="buzz";
            }

            yield $yield;
            $i++;
        }
    }
}
