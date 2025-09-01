<?php 

function getTopAnime(){
    $ch = curl_init();

    $date = new DateTime();
    $currentYear = $date->format("Y");
    $currentMonth = $date->format("F");

    switch ($currentMonth) {
        case 'January':
        case 'February':
        case 'March':
            $season = 'winter';
            break;
        case 'April':
        case 'May':
        case 'June':
            $season = 'spring';
            break;
        case 'July':
        case 'August':
        case 'September':
            $season = 'summer';
            break;
        case 'October':
        case 'November':
        case 'December':
        $season = 'fall';
        break;
    }


    curl_setopt($ch, CURLOPT_URL,
    "https://api.myanimelist.net/v2/anime/season/{$currentYear}/{$season}?sort=anime_score&fields=id,title,synopsis,media_type,studios,rating&limit=10");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "X-MAL-CLIENT-ID: a36f80f010394b0d35cb1a5086ab7811"
    ]);

    $topAnimes = curl_exec($ch);

    curl_close($ch);

    return json_decode($topAnimes, true, JSON_PRETTY_PRINT);
}

