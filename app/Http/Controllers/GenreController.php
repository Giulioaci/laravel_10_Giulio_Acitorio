<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function create(){
        return view('Genre.create');
    }

    public function index(){
         $Genres = Genre::all()->sortBy('name');
        return view('Genre.index', compact('Genres'));
    }

    public function show(Genre $Genre){
         $Genre->load('movies');
        return view('Genre.show', compact('Genre'));
    }

     public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        Genre::create([
            'name'=> $request->name
        ]);
        return redirect()->route('Homepage')->with('successMessage','Hai creato una categoria');
    }
}
