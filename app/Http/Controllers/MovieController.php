<?php

namespace App\Http\Controllers;

use App\Models\Movie;
use App\Models\Genere;
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
        $generes = genere::all();
        return view('Movie.create', compact('generes'));
    }

    public function store(MovieRequest $request){  
        $movie = Movie::Create([
        'title' => $request->title,
        'director' => $request->director,
        'year' => $request->year,
        'plot' => $request->plot,
        'img' => $request->file('img')->store('images', 'public'),
        'user_id' => Auth::user()->id
        ]);

        $movie->generes()->attach($request->generes);
        
        
        return redirect()->route('Homepage')->with('successMessage','Hai correttamente inserito il tuo film');
    }

    public function show(Movie $movie){
        return view('Movie.show', compact('movie'));
    }

    public function edit(Movie $movie){
        if($movie->user_id == Auth::user()->id){
         return view('Movie.edit', compact('movie'));
        }else{
            return redirect()->route('Homepage')->with('errorMessage','Non puoi accedere a questa pagina');
        }

        
    }

     public function update(MovieEditRequest $request, Movie $movie){
        if($movie->user_id == Auth::user()->id){

      $movie->update([
       'title' => $request->title,
       'director' => $request->director,
       'year' => $request->year,
       'plot' => $request->plot,
       ]);
       if($request->hasFile('img')){
        $request->validate(['img'=> 'image']);
        $movie->update([
        'img' => $request->file('img')->store('images', 'public')
    ]);
       }

          return redirect()->route('Homepage')->with('successMessage','Hai correttamente modificato il film');
     }else{return redirect()->route('Homepage')->with('errorMessage','Non puoi accedere a questa pagina');
    }
        
    }

     public function destroy(Movie $movie){
        if($movie->user_id == Auth::user()->id){
        $movie->delete();
        return redirect()->route('Homepage')->with('successMessage','Hai correttamente eliminato il film');
        }else{
           return redirect()->route('Homepage')->with('errorMessage','Non puoi accedere a questa pagina'); 
        }
    }
  
    
}

