<?php 

class Api{

    public $handle;

    public function __construct(){
        $this->handle = curl_init();
        curl_setopt($this->handle, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($this->handle, CURLOPT_HTTPHEADER, [
            "X-MAL-CLIENT-ID: a36f80f010394b0d35cb1a5086ab7811"
        ]);
    }

    public function search($queue){
        
        curl_setopt($this->handle, CURLOPT_URL, 
        "https://api.myanimelist.net/v2/anime?q=" . urlencode($queue) . "&fields=id,title,main_pictures,start_date,media_type,studios,alternative_titles,rating&limit=3");
        
        $animes = curl_exec($this->handle);
        curl_close($this->handle);
        
        return json_decode($animes, true);
    }

    public function getCurrentTop10(){
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
        
        curl_setopt($this->handle, CURLOPT_URL,
        "https://api.myanimelist.net/v2/anime/season/{$currentYear}/{$season}?sort=anime_score&fields=id,title,synopsis,media_type,studios,rating&limit=10");

        $animes = curl_exec($this->handle);
        curl_close($this->handle);

        return json_decode($animes, true);
    }

    public function getTopTVSeries(){
        curl_setopt($this->handle, CURLOPT_URL,
        "https://api.myanimelist.net/v2/anime/ranking?ranking_type=tv&fields=id,title,alternative_titles,start_date,synopsis,media_type,studios,status,genres,mean,num_episodes,average_episode_duration,rating&limit=8");

        $animes = curl_exec($this->handle);
        curl_close($this->handle);

        return json_decode($animes, true);
    }

}