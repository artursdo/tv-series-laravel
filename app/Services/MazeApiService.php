<?php

namespace App\Services;

use Illuminate\Support\Facades\Http;

class MazeApiService{

// SHOWS

    /* when we do not need episodes
        query = string */
    const SIMPLE_SHOW_SEARCH_URL = 'http://api.tvmaze.com/search/shows?q={query}';

    /* when user chooses specific show, we get episodes
        query = id */
    const EPISODES_SHOW_SEARCH_URL = 'http://api.tvmaze.com/shows/{query}/episodes';

    /* when update cron is running we get shows  with specific id
        query = id */
    const CRON_SHOW_SEARCH_URL = 'http://api.tvmaze.com/shows/{query}/episodes';

// ACTORS

    /* when user searches for actor
        query = string */
    const SIMPLE_ACTOR_SEARCH_URL = 'http://api.tvmaze.com/search/people?q={query}';
    /* when user chooses specific show, we get cast 
        query = id */
    const TVSHOW_ACTOR_SEARCH_URL = 'http://api.tvmaze.com/shows/{query}/cast';

    /* get actor shows 
        query = id */
    const ACTOR_TVSHOWS_SEARCH_URL = 'http://api.tvmaze.com/people/{query}/crewcredits?embed=show';


    public function getData($url, $query)
    {
        $combinedUrl = str_replace('{query}', $query, $url);
        
        $response = Http::get($combinedUrl);

        if($response->successful() == false){
            // error handling
            return false;
        }
        
        return $response->json();

    }

}