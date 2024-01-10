<?php

require_once 'vendor/autoload.php';

use Php2\Oop\Core\Database;
use Php2\Oop\Model\BaseModel;
use Php2\Oop\Controller\BaseController;

$data = new Database();

echo $data->getname();
