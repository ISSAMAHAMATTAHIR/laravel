<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllerbanque extends Controller
{
    public function afficher()
    {
        
        return view('banque');
    }
    public function traiter()
    {
       request()->validate
       ([
          
           'date'=>['required'],
           'nom'=>['required'],
           'montant'=>['required'],
           'restant'=>['required'],
          
        ]);
        
           $banques = \App\Banque::create([
           'date'=>request('date'),
           'nom'=>request('nom'),
           'montant'=>request('montant'),
           'restant'=>request('restant'),
           'validation'=>request('validation'),
       ]);
       
       
       flash('vos données a été bien envoyer ')->success();
       return view('/employe');
    }
}
