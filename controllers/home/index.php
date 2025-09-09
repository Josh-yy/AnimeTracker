<?php 

use Vtiful\Kernel\Format;

require 'class/Api.php';
require 'class/Database.php';
require 'helpers/helper.php';


$anime = new Api();

$topAnimes = $anime->getCurrentTop10();

$topTvSeries = $anime->getAnimeInRanking('tv');
$topTvSeries['data'] = formatHumanReadable($topTvSeries['data']);

$popularAnime = $anime->getAnimeInRanking('bypopularity');
$popularAnime['data'] = formatHumanReadable($popularAnime['data']);


require 'views/index.view.php';

