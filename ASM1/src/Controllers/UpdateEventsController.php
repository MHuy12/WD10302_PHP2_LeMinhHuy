<?php

namespace src\Controllers;

use src\Core\RenderBase;
use src\Models\EventsModel;

class UpdateEventsController extends BaseController
{

    private $_renderBase;

    public function __construct()
    {
        parent::__construct();
        $this->_renderBase = new RenderBase();
    }
    public function updateEvent($id)
    {

        $update = new EventsModel();
        $data = $update->getOneEvent($id);
        $this->_renderBase->renderHeader();
        $this->_renderBase->renderNav();
        $this->load->render('client/updateevent', $data);
        $this->_renderBase->renderFooter();
    }
    public function handleUpdateevent($id)
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
            header('Location: ' . $_SERVER['HTTP_REFERER']);
            exit;
        }
        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (isset($_POST['title'], $_POST['description'], $_POST['location'], $_POST['event_status'], $_POST['event_date'])) {
                $title = $_POST['title'];
                $description = $_POST['description'];
                $location = $_POST['location'];
                $event_status = $_POST['event_status'];
                $event_date = $_POST['event_date'];


                $updateEvent = new EventsModel();
                $data = [
                    'title' => $title,
                    'description' => $description,
                    'location' => $location,
                    'event_status' => $event_status,
                    'event_date' => $event_date,
                ];

                $result = $updateEvent->updateEvent($id, $data);

                if ($result) {
                    header('Location: /?url=EventsController');
                    exit();
                } else {
                    echo 'Cập nhật sự kiện không thành công.';
                }
            } else {
                echo 'Dữ liệu POST không hợp lệ.';
            }
        } else {
            echo 'Không có dữ liệu POST.';
        }
    }



}
