<?php 

require 'class/Api.php';
require 'class/Database.php';


$anime = new Api();

$topAnimes = $anime->getCurrentTop10();


require 'views/index.view.php';

