<?php

namespace src\Controllers;

use src\Core\RenderBase;
use src\Models\ParticipantModel;
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
        $participantModel = new ParticipantModel;
        $participant = $participantModel->getAllparticipant();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/participants', $participant);
        $this->_renderBase->renderFooter();
    }

    
}
