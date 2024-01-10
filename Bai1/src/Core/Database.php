<?php

namespace Php2\Oop\Core;

class Database
{

    public $age = 10;

    public function getname()
    {
        return "chao ban nho, ban bao nhieu tuoi?" . $this->age;
    }
}