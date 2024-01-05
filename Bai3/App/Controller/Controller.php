<?php 
include 'App/Model/Model.php';

$email = $_POST['email'] ?? '';
$user = get_user($email);

include 'App/Views/views.php';
?>
