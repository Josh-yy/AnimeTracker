<?php 

function getTopAnime(){
    $ch = curl_init();

    curl_setopt($ch, CURLOPT_URL, "https://api.myanimelist.net/v2/anime/ranking?ranking_type=all&fields=id,title,main_picture,synopsis,pictures&limit=5");
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_HTTPHEADER, [
        "X-MAL-CLIENT-ID: a36f80f010394b0d35cb1a5086ab7811"
    ]);

    $topAnimes = curl_exec($ch);

    curl_close($ch);

    return json_decode($topAnimes, true);
}

