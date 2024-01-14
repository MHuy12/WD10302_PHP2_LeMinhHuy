<?php

namespace Php2\Oop\Model;

abstract class AbstractBaseModel 
{
    protected $table;

    public function __construct($table)
    {
        $this->table = $table;
    }

    abstract public function create();
    abstract public function read();
    abstract public function update();
    abstract public function delete();
}
