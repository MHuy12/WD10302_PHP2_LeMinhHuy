<?php


require "src/Includes/nav.php";

$act = isset($_GET['act']) ? $_GET['act'] : 'home';


//Include header
require "src/Includes/header.php";

switch ($act) {

    case 'home': {
            include "src/View/home.php";
            break;
        }
    case 'event': {
            include "src/View/Events/events.php";
            break;
        }
    case 'participants': {
            include "src/View/Events/participants.php";
            break;
        }
    case 'user': {
            include "src/View/user.php";
            break;
        }
    case 'addEvent': {
            include "src/View/Events/addevents.php";
            break;
        }
    case 'updateEvent': {
            include "src/View/Events/updateevent.php";
            break;
        }
    default: {
            include "home/404.php";
            break;
        }
}

require 'src/Includes/footer.php';
