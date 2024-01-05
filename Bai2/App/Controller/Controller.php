<?php 
include 'App/Model/Model.php';


$block = (!empty($_GET['block'])) ? $_GET['block'] : '' ;
$course_name = find_by_block($block);
$page_content = $course_name ?? "invalid";

include 'App/Views/view.php';
?>
