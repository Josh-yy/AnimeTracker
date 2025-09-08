<?php 

use Vtiful\Kernel\Format;

require 'class/Api.php';
require 'class/Database.php';
require 'helpers/helper.php';


$anime = new Api();

$topAnimes = $anime->getCurrentTop10();

$topTvSeries = $anime->getTopTVSeries();

$topTvSeries['data'] = array_map(function($anime){
    $rawDate = $anime['node']['start_date'] ?? null;
    $rawDuration = $anime['node']['average_episode_duration'] ?? null;
    $rawStatus = $anime['node']['status'] ?? null;
    
    $anime['node']['start_date'] = formatHumanDate($rawDate);
    $anime['node']['average_episode_duration'] = formatHumanDuration($rawDuration);
    $anime['node']['status'] = formatHumanText($rawStatus);

    return $anime;

}, $topTvSeries['data']);


require 'views/index.view.php';

