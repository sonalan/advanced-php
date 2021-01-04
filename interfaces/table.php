<?php
namespace Interfaces;
require "interface.php";

class Table implements \Interfaces\TableInterface{

    public function save(array $data)
    {
        // TODO: Implement save() method.
        echo "save method called\n";
    }
}
