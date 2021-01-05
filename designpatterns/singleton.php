<?php
namespace DesignPatterns;

class Singleton{

    protected static $instance;


    public static function getInstance()
    {
        if(null === static::$instance){
            static::$instance = new static();
        }

        return static::$instance;
    }

    /**
     * Singleton constructor.
     * protected constructor to prevent creating a new instance of the class via new operator
     */
    protected function __construct()
    {

    }

    /**
     * Private clone method to prevent cloning of the instance of the
     * *Singleton* instance.
     *
     * @return void
     */
    private function __clone()
    {
    }

    /**
     * Private unserialize method to prevent unserializing of the *Singleton*
     * instance.
     *
     * @return void
     */
    private function __wakeup()
    {
    }

    public static function connect(){
        return "connected";
    }
}
