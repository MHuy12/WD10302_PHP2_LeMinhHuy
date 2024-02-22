<?php

namespace src\Core;

use src\Controllers\BaseController;

class RenderBase extends BaseController
{
    public function __construct()
    {
        parent::__construct();
    }

    public function renderHeader(){
        $this->load->render('layout/header');
    }
   


    public function renderFooter(){
        $this->load->render('layout/footer');
    }
    public function renderNav(){
        $this->load->render('layout/nav');
    }
}