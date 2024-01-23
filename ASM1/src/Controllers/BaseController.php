<?php

namespace src\Controllers;

use src\Core\Render;


class BaseController
{
    protected  $load;
    function __construct()
    {
        $this->load = new Render();
    }

    public function redirect($url, $refresh = null): void
    {
        header('location:' . $url);
    }
}
