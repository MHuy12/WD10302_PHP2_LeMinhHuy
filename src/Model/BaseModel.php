<?php

namespace Php2\Oop\Model;

use Php2\Oop\Model\BaseModelInterfaces;
use Php2\Oop\Model\AbstractBaseModel;

class BaseModel extends AbstractBaseModel implements BaseModelInterfaces
{


    public function create()
    {
        echo "đây là phương thức tạo";
    }

    public function read()
    {

    }

    public function update()
    {

    }

    public function delete()
    {

    }
}


