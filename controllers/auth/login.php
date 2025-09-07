<?php 
require 'class/Users.php';

$user = new Users();

if ($_SERVER['REQUEST_METHOD'] === "POST"){
    $data = [
        "username" => $_POST['username'],
        "password" => $_POST['password'],
    ];

    $message = $user->login( $data);
    
    header('Content-Type: application/json');
    echo json_encode($message);
    exit;
    
}