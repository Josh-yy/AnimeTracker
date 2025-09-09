<?php
require 'class/Api.php';
require 'class/Database.php';
require 'helpers/helper.php';


$anime = new Api(); 

if ($_SERVER['REQUEST_METHOD'] === "GET"){
    $rankingType = $_GET['anime'];

    $animes = $anime->viewMoreAnime($rankingType);
    $animes['data'] = formatHumanReadable($animes['data']);
    $animes['heading'] = getRankingHeading($rankingType);
  
}

require 'views/view-more/index.php';