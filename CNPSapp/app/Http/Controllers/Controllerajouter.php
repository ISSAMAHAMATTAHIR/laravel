<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Controllerajouter extends Controller
{
    public function afficher()
    {
        return view('ajouter');
    }
    public function traiter()
    {
       request()->validate
       ([
          
           'nom'=>['required'],
           'prenom'=>['required'],
           'sexe'=>['required'],
           'date'=>['required','date'],
           'lieu'=>['required'],
           'age'=>['required'],
           'profession'=>['required'],
           'paye'=>['required'],
           'retraite'=>['required'],
           'adresse'=>['required'],
           'photo'=>['required','image'],
        ]);
        
           $employes = \App\Employe::create([
           'nom'=>request('nom'),
           'prenom'=>request('prenom'),
           'sexe'=>request('sexe'),
           'date'=>request('date'),
           'lieu'=>request('lieu'),
           'age'=>request('age'),
           'profession'=>request('profession'),
           'paye'=>request('paye'),
           'retraite'=>request('retraite'),
           'adresse'=>request('adresse'),
           'photo'=>request('photo')->store('images'),
       ]);
       
       
       flash('vos données a été bien envoyer ')->success();
       return view('/employe');
   }

}
