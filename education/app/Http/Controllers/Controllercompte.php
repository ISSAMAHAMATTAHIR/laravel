<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;  



class Controllercompte extends Controller
{
    public function compte()
        {   
            return view('compte');
        }
    public function envoyer()
     {
        // request()->validate
        // ([
        //     'email'=> ['email','required'],
        //     'nom'=>['required'],
        //     'prenom'=>['required'],
        //     'parcours'=>['required'],
        //     'lieu'=>['required'],
        //     'date'=>['required'],
        //     'genre'=>['required'],
        //     'bac'=>['required'],
        //     'fichier'=>['required','file'],
        //     'l1'=>['required'],
        //     'fichier1'=>['required','file'],
        //     'l2'=>['required'],
        //     'fichier2'=>['required','file'],
        //     'l3'=>['required'],
        //     'fichier3'=>['required','file'],
        //     'moyenne'=>['required'],
        //     'filiere'=>['required'],
        //     ]);

        $comptes = \App\Compte::create([
            'email'=>request('email'),
            'nom'=>request('nom'),
            'prenom'=>request('prenom'),
            'parcours'=>request('parcours'),
            'lieu'=>request('lieu'),
            'date'=>request('date'),
            'genre'=>request('genre'),
            'bac'=>request('bac'),
            'fichier'=>request('fichier'),
            'l1'=>request('l1'),
            'fichier1'=>request('fichier1'),
            'l2'=>request('l2'),
            'fichier2'=>request('fichier2'),
            'l3'=>request('l3'),
            'fichier3'=>request('fichier3'),
            'moyenne'=>(request('l1')+request('l2')+request('l3'))/3,
            'filiere'=>request('filiere'),


        ]);
        
        

        return 'votre dossiers a ete bien envoyé';
    }

}