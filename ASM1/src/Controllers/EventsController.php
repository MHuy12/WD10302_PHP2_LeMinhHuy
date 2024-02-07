<?php

namespace src\Controllers;

use src\Core\RenderBase;
use src\Models\EventsModel;

class EventsController extends BaseController
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
        $eventsModel = new EventsModel;
        $events = $eventsModel->getAllEvents();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/events', $events);
        $this->_renderBase->renderFooter();

    }
}
