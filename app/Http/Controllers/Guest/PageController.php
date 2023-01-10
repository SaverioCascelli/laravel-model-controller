<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Movie;
use Illuminate\Http\Request;
use Psy\TabCompletion\Matcher\FunctionsMatcher;

class PageController extends Controller
{
    public function index()
    {
        return view('home');
    }

    public function about_us()
    {
        return view('about_us');
    }

    public function movies()
    {
        $movies = Movie::all();
        return view('movies', compact('movies'));
    }
    public function movieDetail($id)
    {
        $movie = Movie::find($id);

        return view('movie_detail', compact('movie'));
    }
}
