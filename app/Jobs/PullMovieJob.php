<?php

namespace App\Jobs;

use App\Models\Movie;
use Illuminate\Support\Facades\Http;

class PullMovieJob
{

    const TOTAL_PAGINATION = 5;

    private $model;

    public function __construct(Movie $model)
    {
        $this->model = $model;
    }

    public function pullMovies()
    {
        $apiKey = '613af780';
        $searchMovie = 'spider-man';
        $searchUrl = "http://www.omdbapi.com/?s=$searchMovie&apikey=$apiKey&page=";

        for ($i = 1; $i <= self::TOTAL_PAGINATION; $i++) {
            foreach (Http::get($searchUrl . $i)['Search'] as $movie) {
                $this->model->updateOrCreate([
                    'imdbID' => $movie['imdbID'],
                    'title' => $movie['Title'],
                    'year' => $movie['Year'],
                    'type' => $movie['Type']
                ]);
            }
        }
        return 'Created Success!';
    }
}
