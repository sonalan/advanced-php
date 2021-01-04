<?php
require "trait.php";



class Table{
    use \Traits\Log;

    /**
     * save method
     */
    public function save(){
        $this->log("save started");
    }

}
