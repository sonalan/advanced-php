<?php
namespace DesignPatterns\Abstracts;

abstract class Database{
    abstract public function connection();

    public function disconnect(){
        // disconnect from database
    }
}
