<?php 

require 'api/currentTop10Anime.php';

$topAnimes = getTopAnime();

require 'views/index.view.php';

