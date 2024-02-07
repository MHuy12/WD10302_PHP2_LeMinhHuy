<?php

namespace src\Controllers;

use src\Core\RenderBase;

use src\Models\UserModel;

class RegisterController extends BaseController
{

    private $_renderBase;


    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->loadViewRegister();
    }


    public function loadViewRegister()
    {
        if (!empty($_SESSION['user'])) {
            
            $this->redirect('?url=HomeController');
    
            
            
        }
    
        $this->_renderBase->renderHeader();
        $this->load->render('auth/register');
        $this->_renderBase->renderFooter();
    }
    


    public function handleRegister()
    {

        $errors = [];

        if (empty($_POST["name"])) {
            $errors['name'] = "Tên không được bỏ trống!";
        }
        if (empty($_POST["email"])) {
            $errors['email'] = "Email không được bỏ trống!";
        }
        if (empty($_POST["password"])) {
            $errors['password'] = "Mật khẩu không được bỏ trống!";
        }


        if (!empty($errors)) {
            $_SESSION['validation_errors'] = $errors;
            header('Location: ?url=RegisterController');
            exit;
        }


        $userModel = new UserModel();
        $user = $userModel->checkUserExist($_POST["email"]);

        if ($user) {
            $_SESSION['user_error'] = "Tài khoản đã tồn tại!";
            header('Location: ?url=RegisterController');
            exit;
        }

        $userModel->registerUser($_POST);

        $_SESSION['registration_success_message'] = "Registration successful!";


        header('Location: ?url=RegisterController');
        exit;
    }





}