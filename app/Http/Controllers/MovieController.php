<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use App\Movies;
use App\Episodes;

class MovieController extends Controller
{
    public function home() {

        $popular = Movies::where('genre_id', 1)->get();
        $documentary = Movies::where('genre_id', 2)->get();
        $drama = Movies::where('genre_id', 3)->get();
        $movies = [
            "Popular" => $popular,
            "Documentary" => $documentary,
            "Dramas" => $drama
        ];

        return view('home')->with('movies', $movies);
    }

    public function details($moviesId) {
        $details = Movies::where('id', $moviesId)->first();
        $getEpisodes = Episodes::where('movie_id', $moviesId)->paginate(3);
        return view('movieDetails')->with('movieDetails', $details)->with('episodeList', $getEpisodes);
    }

    public function category(Request $request) {
        if ($request->type === 'Popular Series'){
            $result = Movies::where('genre_id', 1)->get();
        }
        else if ($request->type === 'Documentary Series'){
            $result = Movies::where('genre_id', 2)->get();
        }
        else if ($request->type === 'Drama Series'){
            $result = Movies::where('genre_id', 3)->get();
        }
        return view('movieCategory')->with('categories', $result);
    }

}
