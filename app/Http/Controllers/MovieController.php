<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;

class MovieController extends Controller
{
      public function movielist()
    {
    //  $movies = [
    //     ['id'=> '1', 'title'=> 'incontri ravvicinati del terzo tipo', 'director'=> 'S. spielberg', 'img'=> '/Media/ragazzi.jpg' ],
    //     ['id'=> '2', 'title'=> 'Quei bravi ragazzi', 'director'=> 'M. scorsese', 'img'=>'/Media/incontri.jpg' ],
    // ];

     $movies =Movie::all();
     return view('Movie.movies',['movies'=> $movies]);
    }

    public function create(){
        return view('Movie.create');
    }

    public function store(MovieRequest $request){  
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->year = $request->year;
        $movie->plot = $request->plot;
        $movie->img = $request->file('img')->store('images', 'public');
        $movie->save();
        
        return redirect()->route('Homepage')->with('successMessage','Hai correttamente inviato il tuo film');
    }

    public function show(Movie $movie){
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie){
        return view('movie.edit', compact('movie'));
    }

     public function update(Request $request, Movie $movie){

       $movie->update([
        $movie->title = $request->title,
        $movie->director = $request->director,
        $movie->year = $request->year,
        $movie->plot = $request->plot,
       ]);
       if($request->img){
        $movie->update([
           $movie->img = $request->file('img')->store('public/images')
        ]);
       }


        
    }
  
    
}

