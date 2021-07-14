<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function index()
    {
        $pageTitle = "Laravel | Model Controller";
        $movies = Movie::all();
        return view('home', compact('pageTitle', 'movies'));
    }
}
