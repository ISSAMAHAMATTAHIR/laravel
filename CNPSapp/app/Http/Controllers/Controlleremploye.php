<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class Controlleremploye extends Controller
{
    public function afficher()
        {   
           if(auth()->guest())
           {
               flash('vous n\'est pas connecter')->error();
               return view('connecter');
           }
            return view('employe');
        }

        public function deconnexion()
        {
            auth()->logout();
            return redirect('/'); 
        }  
        
        public function retour()
        {
            return back();
        }
}
