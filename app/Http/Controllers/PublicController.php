<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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

    public function contactUs(Request $request){

      $user = $request->input('user');
      $email = $request->input('email');
      $message = $request->input('message');

        Mail::to($email)->send(new ContactMail());
        return redirect(route('Homepage'))->with('emailSent','Hai correttamente inviato una email');
      }

      public function profile()
    {
     return view('profile');
    }

}
