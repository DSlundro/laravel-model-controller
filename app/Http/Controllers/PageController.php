<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Movie;

class PageController extends Controller
{
    public function index()
    {
        $movies = Movie::all();
        //dd($movies);
        return view('/layouts/app', compact('movies'));
        return view('/conponents/header');
        return view('/conponents/footer');
        return view('/partials/cards');
    }
};
