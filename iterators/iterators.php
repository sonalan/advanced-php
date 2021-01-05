<?php
namespace Iterators;

use Traversable;

class CsvIterator extends  \IteratorIterator{

    public function __construct(Traversable $iterator)
    {
        parent::__construct($iterator);
        $file= $this->getInnerIterator();
        $file->setFlags(\SplFileObject::READ_CSV);
        $file->setCsvControl(',','"',"\\");
    }
}


class FilterRows extends \FilterIterator{

    public function accept()
    {
        // get the current element;
        $current=$this->getInnerIterator()->current();
        if(count($current)==1){
            return false;
        }
        return true;
    }
}
