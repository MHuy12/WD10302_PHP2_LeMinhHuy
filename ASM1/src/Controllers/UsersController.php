<?php

namespace src\Controllers;

use src\Core\RenderBase;

class UsersController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->Users();
    }

    function Users()
    {
        $this->usersPage();
    }

    function usersPage()
    {
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/users');
        $this->_renderBase->renderFooter();
    }

    
}
