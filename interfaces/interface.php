<?php
namespace Interfaces;
interface TableInterface{
    /**
     * @param array $data
     * @return boolean
     */
    public function save(array $data);
}

interface LogInterface{
    /**
     * @param string $message
     * @return boolean
     */
    public function log(string $message);
}
