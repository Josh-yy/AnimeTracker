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