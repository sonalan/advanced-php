<?php
namespace Traits;

trait Log{
    protected function log($message){
        echo "{$message}\n";
    }
}
