<?php

namespace src\Controllers;

use src\Core\RenderBase;

class UpdateEventsController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->updateEvent();
        
    }

    function updateEvent()
    {
        $this->updateEventPage();
        
    }

    public function updateEventPage()
    {   
        
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/updateevent');
        $this->_renderBase->renderFooter();
    }

   
}
