<?php

namespace src\Controllers;

use src\Core\RenderBase;
use src\Models\EventsModel;

class AddEventsController extends BaseController
{

    private $_renderBase;

    function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
        $this->addEvent();

    }

    function addEvent()
    {
        $this->addEventPage();

    }

    public function addEventPage()
    {

        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/addevents');
        $this->_renderBase->renderFooter();
    }
    public function handleAddEvent()
    {   
        $errors = [];

        if (empty($_POST["title"])) {
            $errors['title'] = "Tiêu đề không được để trống!";
        }
        if (empty($_POST["event_date"])) {
            $errors['event_date'] = "Ngày không được để trống!";
        }
        if (empty($_POST["location"])) {
            $errors['location'] = "Địa điểm không được để trống!";
        }
        if (empty($_POST["description"])) {
            $errors['description'] = "Mô tả không được để trống!";
        }
        if (!empty($errors)) {
            $_SESSION['validation_errors'] = $errors;
            header('Location: ?url= AddEventsController');
            exit;
        }

        $EventsModel = new EventsModel();
        $EventsModel->addEvent($_POST);

        $_SESSION['registration_success_message'] = "Thêm thành công!";


        header('Location: ?url=EventsController');
        exit;
    }

}

