<?php 

function formatHumanDate($rawDate){
    $date = new DateTime($rawDate);
    
    return $rawDate ? $date->format("F j, Y") : "TBA";
}

function formatHumanDuration($seconds){
    $mins = $seconds / 60;

    return $seconds ? (string) round($mins, 0) . "mins" : "N/A";
}

function formatHumanText(string $string){
    
    $splitString = "";
    $array = explode('_', $string);

    foreach ($array as $string){
        $splitString .= ucfirst($string) . " ";
    }

    return $string ? $splitString : "N/A";

}

function formatHumanReadable(array $animes){
    $animes = array_map(function($anime){
    $rawDate = $anime['node']['start_date'] ?? null;
    $rawDuration = $anime['node']['average_episode_duration'] ?? null;
    $rawStatus = $anime['node']['status'] ?? null;
    
    $anime['node']['start_date'] = formatHumanDate($rawDate);
    $anime['node']['average_episode_duration'] = formatHumanDuration($rawDuration);
    $anime['node']['status'] = formatHumanText($rawStatus);

    return $anime;

}, $animes);

    return $animes;
}