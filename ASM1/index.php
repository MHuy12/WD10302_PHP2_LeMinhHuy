<?php

require_once "vendor\autoload.php";
session_start();
ob_start();
define("ROOT_URL", "127.0.0.1:5000");

use src\Core\Route;


new Route;

	
