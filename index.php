<?php

require_once 'vendor/autoload.php';


use Php2\Oop\Model\BaseModel;


$new = new BaseModel("huy");

echo $new->create();