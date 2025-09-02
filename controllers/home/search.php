<?php 

require 'class/Api.php';

$anime = new Api();

if (isset($_POST['search'])){
    $queue = $_POST['search'];

    $details = $anime->search($queue);
    
    header('Content-Type: application/json');
    echo json_encode($details['data']);
    exit;
}