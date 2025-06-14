<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MovieController extends Controller
{
    public function movielist()
    {
     $movies = [
        ['id'=> '1', 'title'=> 'incontri ravvicinati del terzo tipo', 'director'=> 'S. spielberg', 'img'=> '/Media/ragazzi.jpg' ],
        ['id'=> '2', 'title'=> 'Quei bravi ragazzi', 'director'=> 'M. scorsese', 'img'=>'/Media/incontri.jpg' ],
    ];
     return view('movie.movies',['movies'=>$movies]);
    }
}
