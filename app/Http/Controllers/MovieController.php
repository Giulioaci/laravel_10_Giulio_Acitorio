<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;
use App\Http\Requests\MovieRequest;
use Illuminate\Support\Facades\Auth;
use App\Http\Requests\MovieEditRequest;

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
        $movie->user_id = Auth::user()->id;
        
        return redirect()->route('Homepage')->with('successMessage','Hai correttamente inviato il tuo film');
    }

    public function show(Movie $movie){
        return view('movie.show', compact('movie'));
    }

    public function edit(Movie $movie){
        return view('movie.edit', compact('movie'));
    }

     public function update(MovieEditRequest $request, Movie $movie){

       $movie->update([
        $movie->title = $request->title,
        $movie->director = $request->director,
        $movie->year = $request->year,
        $movie->plot = $request->plot,
       ]);
       if($request->img){
        $request->validate(['img'=> 'image']);
        $movie->update([
        $movie->img = $request->file('img')->store('public/images')
        ]);
       }

          return redirect()->route('Homepage')->with('successMessage','Hai correttamente modificato il film');
        
    }

     public function destroy(Movie $movie){
        $movie->delete();
        return redirect()->route('Homepage')->with('successMessage','Hai correttamente eliminato il film');
    }
  
    
}

