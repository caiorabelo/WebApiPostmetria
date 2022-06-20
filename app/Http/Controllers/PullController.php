<?php

namespace App\Http\Controllers;

use App\Jobs\PullMovieJob;

class PullController extends Controller
{
    public function pullMovies(PullMovieJob $pullMovies)
    {
        return $pullMovies->pullMovies();
    }
}
