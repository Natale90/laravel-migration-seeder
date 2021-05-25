<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Movie;

class MovieController extends Controller
{
    public function home(){

        $movies = Movie::all();

        return view('pages.home', compact('movies'));
    }

    public function movie($id){

        $movie = Movie::FindOrFail($id);

        return view('pages.movie', compact('movie'));
    }

    public function create(){

        return view('pages.create');
    }

    public function store(Request $request){

        $validate = $request -> validate([
            'title' => 'nullable|max:100',
            'original_title' => 'nullable|max:100',
            'nationality' => 'nullable|max:20',
            'date_of_release' => 'nullable|date',
            'vote' => 'nullable|numeric',
        ]);
        // dd($request -> all());

        $movie = Movie::create($validate);
        return redirect() -> route('details', $movie -> id);
    }
}
