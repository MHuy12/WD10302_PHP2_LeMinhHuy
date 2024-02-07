<?php

namespace src\Controllers;

use src\Core\RenderBase;
use src\Models\UserModel;

class LoginController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();

    }

    public function LoginController()
    {
        $this->loadViewLogin();
    }
    public function loadViewLogin()
    {

        if (!empty($_SESSION['user'])) {
            $this->redirect('?url=HomeController');
        }

        $this->_renderBase->renderHeader();
        $this->load->render('auth/login');
        $this->_renderBase->renderFooter();
    }


    public function handleLogin()
    {

        if (empty($_POST["email"])) {
            $_SESSION['login_error'] = "Email không được để trống!";
            header('Location: ?url=LoginController/loadViewLogin');
            exit;
        }
        if (empty($_POST["password"])) {
            $_SESSION['login_error'] = "Password không được để trống!";
            header('Location: ?url=LoginController/loadViewLogin');
            exit;
        }


        $userModel = new UserModel();


        $user = $userModel->checkUserExist($_POST["email"]);
        if (!$user) {
            $_SESSION['login_error'] = "Email hoặc password không khả dụng!";
            header('Location: ?url=LoginController/loadViewLogin');
            exit;
        }

        if (isset($_POST['password'], $user['password'])) {

            $_SESSION['user'] = $user;
            header('Location: ?url=HomeController');
            exit;
        } else {
            $_SESSION['login_error'] = "Email hoặc password không khả dụng!";
            header('Location: ?url=LoginController/loadViewLogin');
            exit;
        }
    }



    public function logout()
    {
        unset($_SESSION['user']);
        $this->redirect('?url=LoginController/loadViewLogin');
    }


}