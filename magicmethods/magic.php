<?php
namespace Magicmethods;

class MagicBox{

    public $someProperty="Hello world";

    public function __construct()
    {
    	echo "Magic just started\n";

    	//Do your magic here
    }

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

    public function __invoke($greeting,$name)
    {
        return "{$greeting} {$name} it's a lovely day";
    }

    public function __call($name,$arguments)
    {
        // TODO: Implement __call() method.
    }
}

