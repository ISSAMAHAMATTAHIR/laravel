<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;


class Controllerconnexion extends Controller 
{
    public function afficher()
        {   
            return view('connexion');
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
            return redirect('/employe');
            }
            return view('connexion');
    }
}