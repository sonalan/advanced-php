<?php
namespace Magicmethods;

class MagicBox{

    public $someProperty="Hello world";

    public function __construct()
    {
    	echo "Magic just started\n";

    	//Do your magic here
    }

    /**
     * @param $name
     * @param $value
     */
    public function __set($name,$value)
    {
        $this->$name=$value;
    }

    /**
     * @param $name
     * @return mixed
     */
    public function __get($name)
    {
        return $this->$name;
    }

    /**
     * @return string
     */
    public function __toString()
    {
        return $this->someProperty;
    }

    public function __sleep()
    {
        // TODO: Implement __sleep() method.
    }

    public function __wakeup()
    {
        // TODO: Implement __wakeup() method.
    }

    /**
     * @param $greeting
     * @param $name
     * @return string
     */
    public function __invoke($greeting,$name)
    {
        return "{$greeting} {$name} it's a lovely day";
    }

    /**
     * @param $name
     * @param $arguments
     */
    public function __call($name,$arguments)
    {
        // TODO: Implement __call() method.
    }
}

