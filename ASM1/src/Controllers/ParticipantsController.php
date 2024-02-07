<?php

namespace src\Controllers;

use src\Core\RenderBase;

class ParticipantsController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->Participants();
    }

    function Participants()
    {
        $this->ParticipantsPage();
    }

    function ParticipantsPage()
    {
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/participants');
        $this->_renderBase->renderFooter();
    }

    
}
