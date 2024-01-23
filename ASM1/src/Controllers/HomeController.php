<?php

namespace src\Controllers;

use src\Core\RenderBase;

class HomeController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }

    function HomeController()
    {
        $this->homePage();
        
    }

    function homePage()
    {


        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/home'); 
        
        $this->_renderBase->renderFooter();
    }
    

    
   
}