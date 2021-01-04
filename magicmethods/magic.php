<?php
namespace Magicmethods;

class MagicBox{

    public static $instances;
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

    public function __isset($name)
    {
        // TODO: Implement __isset() method.
    }

    public function __unset($name)
    {
        // TODO: Implement __unset() method.
    }

    public function __serialize(): array
    {
        return [
            'className' => get_class($this),
            'someProperty' => $this->someProperty,
            'instances' => $this->instances,
        ];
    }

    public function __unserialize(array $data): void
    {
        $this->someProperty=$data["someProperty"];
        $this->someProperty2=$data["someProperty2"];
        $this->someProperty3=$data["someProperty4"];
    }

    public static function __set_state($an_array)
    {
        // TODO: Implement __set_state() method.
    }

    public function __clone()
    {
        ++static::$instances;
    }

    public function __debugInfo()
    {
        return ['someProperty' => $this->someProperty];
    }

    public function __destruct()
    {
        --static::$instances;
    }
}

