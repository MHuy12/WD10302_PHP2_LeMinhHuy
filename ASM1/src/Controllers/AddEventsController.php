<?php

namespace src\Controllers;

use src\Core\RenderBase;

class AddEventsController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->addEvent();
        
    }

    function addEvent()
    {
        $this->addEventPage();
        
    }

    public function addEventPage()
    {   
        
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/addevents');
        $this->_renderBase->renderFooter();
    }

   
}

