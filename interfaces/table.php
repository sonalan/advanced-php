<?php
namespace Interfaces;
require "interface.php";

class Table implements \Interfaces\TableInterface, \Interfaces\LogInterface {

    public function save(array $data)
    {
        // TODO: Implement save() method.
        echo "save method called\n";
    }

    public function log(string $message)
    {
        // TODO: Implement log() method.
        echo "log method called\n";
    }
}
