<?php 

require 'api/topAnime.php';

$topAnimes = getTopAnime();

require 'views/index.view.php';

