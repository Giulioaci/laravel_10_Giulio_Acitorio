<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movielist()
    {
    //  $movies = [
    //     ['id'=> '1', 'title'=> 'incontri ravvicinati del terzo tipo', 'director'=> 'S. spielberg', 'img'=> '/Media/ragazzi.jpg' ],
    //     ['id'=> '2', 'title'=> 'Quei bravi ragazzi', 'director'=> 'M. scorsese', 'img'=>'/Media/incontri.jpg' ],
    // ];

     $movies =Movie::all();
     return view('movie.movies',['movies'=> $movies]);
    }

    public function create(){
        return view('movie.create');
    }

    public function store(Request $request){  
        $movie = new Movie();
        $movie->title = $request->title;
        $movie->director = $request->director;
        $movie->year = $request->year;
        $movie->plot = $request->plot;
        $movie->save();
        
        return redirect()->route('Homepage')->with('successMessage','Hai correttamente inviato il tuo film');
    }
}

