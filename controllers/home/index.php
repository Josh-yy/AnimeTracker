<?php 

require 'class/Api.php';
require 'class/Database.php';


$anime = new Api();

$topAnimes = $anime->getCurrentTop10();
$topTvSeries = $anime->getTopTVSeries();
// dd($topTvSeries);

require 'views/index.view.php';

