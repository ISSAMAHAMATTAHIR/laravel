<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;


class Controllerconnecter extends Controller 
{
    public function afficher()
        {   
            return view('connecter');
        }
        public function traitement()
        {
            request()->validate
            ([
                'email'=> ['email','required'],
                'password'=>['required'],
    
            ]);
            $resultat = auth()->attempt(
                [
                    'email'=>request('email'),
                    'password'=>request('password'),
                ]
                );
            if($resultat)
            {
            return redirect('/compte');
            }
            return view('connecter');
    }
}