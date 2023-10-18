<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllermodifier extends Controller
{
   public function afficher()
   {
        return view('/modifier');
   }

   public function modifier()
   {
      if(auth()->guest())
      {
          flash('vous n\'est pas connecter')->error();
          return view('connecter');
      }
      request()->validate
      ([
         
         'password' => ['required','confirmed'],
         'password_confirmation' => ['required'],
    
      ]);
      
      auth()->user()->update([
      'password' => bcrypt(request('password')),
     ]);
     
     flash('votre password a ete bien modeifier')->success();
     return redirect('/employe');
   }
}