<?php

namespace Php2\Oop\Core;

class Base {

    const VAT = 0.1;
    public static 

    private $_name = "php";
    public function getName(){
        return $this->_name;
    }
    public function setName($language){
        echo self::VAT. "<br>";
        $this->_name = $language;
    }
    public function getVAT(){
        return self::VAT;
    }
}