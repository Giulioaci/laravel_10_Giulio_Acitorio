<?php

namespace App\Http\Controllers;

use App\Models\Genere;
use Illuminate\Http\Request;

class GenereController extends Controller
{
    public function create(){
        return view('genere.create');
    }

    public function index(){
         $generes = genere::all()->sortBy('name');
        return view('genere.index', compact('generes'));
    }

    public function show(genere $genere){
         $genere->load('movies');
        return view('genere.show', compact('genere'));
    }

     public function store(Request $request){
        $request->validate([
            'name'=>'required'
        ]);
        genere::create([
            'name'=> $request->name
        ]);
        return redirect()->route('Homepage')->with('successMessage','Hai creato una categoria');
    }
}
