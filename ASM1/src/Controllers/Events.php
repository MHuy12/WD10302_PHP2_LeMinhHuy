<?php

namespace src\Controllers;

use src\Core\RenderBase;

class Events extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->Events();
    }

    function Events()
    {
        $this->eventPage();
    }

    function eventPage()
    {
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/events');
        $this->_renderBase->renderFooter();
    }

    
}
