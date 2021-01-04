<?php
namespace Interfaces;
interface TableInterface{
    /**
     * @param array $data
     * @return mixed
     */
    public function save(array $data);
}
