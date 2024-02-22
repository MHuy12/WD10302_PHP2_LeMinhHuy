<?php

namespace src\Controllers;

use src\Core\RenderBase;
use src\Models\UserModel;
use src\Models\MailModel;

class ForgotPassController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();

    }

    function Forgot()
    {
        $this->ForgotPass();
    }

    function ForgotPass()
    {

        $this->_renderBase->renderHeader();

        $this->load->render('auth/forgotpass');
        $this->_renderBase->renderFooter();
    }
    public function handleForgotPass()
    {
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $email = $_POST["email"];
            $code = substr(rand(0, 999999), 0, 6);


            $_SESSION['email'] = $email;
            $_SESSION['confirmation_code'] = $code;

            $mailModel = new MailModel();
            $result = $mailModel->sendConfirmationCode($email, $code);

            if ($result) {

                header("Location: ?url=ForgotPassController/Verification");
                exit();
            } else {

                echo "Failed to send confirmation code.";
            }
        }
    }

    function Verification()
    {
        $this->_renderBase->renderHeader();

        $this->load->render('auth/verification');
        $this->_renderBase->renderFooter();
    }
    public function verifyCode()
    {


        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST["code"])) {
            $code = $_POST["code"];


            if ($_SESSION["confirmation_code"] === $code) {

                header("Location: ?url=ForgotPassController/ResetPassword");
                exit();
            } else {

                echo "Mã không hợp lệ.";
            }
        } else {

            echo "Mã không xác định.";
        }


    }

    function ResetPassword()
    {
        $this->_renderBase->renderHeader();
        $this->load->render('auth/resetpass');
        $this->_renderBase->renderFooter();
    }
    function handleResetPass()
    {
        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            if ($_SERVER["REQUEST_METHOD"] == "POST") {
                $email = $_SESSION["email"];
                $newPassword = $_POST["new_password"];

                $userModel = new UserModel();
                $userModel->updateUserPasswordByEmail($email, $newPassword);

                unset($_SESSION["confirmation_code"]);
                unset($_SESSION["email"]);


                header("Location: ?url=LoginController/loadViewLogin");
                exit();
            } else {

                $error = "Passwords do not match. Please try again.";
            }
        }

    }
}
