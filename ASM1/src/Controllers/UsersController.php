<?php

namespace src\Controllers;

use src\Core\RenderBase;
use src\Models\UserModel;

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
        $userModel = new UserModel;
        $user = $userModel->getAllUser();
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/users', $user);
        $this->_renderBase->renderFooter();
    }


}
