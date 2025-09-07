<?php 

if($_SERVER['REQUEST_METHOD'] === "POST"){
    session_unset();

    header('Content-Type: application/json');
    echo json_encode("Logout Successfully!");
    exit;
}