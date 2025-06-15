<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public $users = [
        ['name'=> 'Marco', 'surname'=> 'Rossi', 'role'=> 'Senior Manager' ],
        ['name'=> 'Luca', 'surname'=> 'Verdi', 'role'=> 'HR' ],
        ['name'=> 'Guido', 'surname'=> 'Verdi', 'role'=> 'Developer' ]
    ];
     public function Homepage()
     {
       return view('welcome');
     }

   public function aboutus()
   {
    return view('Chi-Siamo', ['users'=> $this-> users]);
   }

   public function ChiSiamodetail($name)
   {
       foreach ($this-> users as $user){
        if($name == $user['name']){
        return view('Chi-Siamo-detail',['user'=>$user]);
        }
    }
   }

    public function Contacts()
    {
     return view('Contatti');
    }
}
