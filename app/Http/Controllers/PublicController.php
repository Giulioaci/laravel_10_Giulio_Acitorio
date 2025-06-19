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


      try {
        Mail::to($email)->send(new ContactMail());
      }catch(Exception $e){
        return redirect()->route('homepage')->whith('emailError', "C'è stato un Problema con l'invio della mail.riprova!");
      }
      return redirect(route('homepage'))->with('emailSent','Hai corretamente inviato una mail');
      }
}
