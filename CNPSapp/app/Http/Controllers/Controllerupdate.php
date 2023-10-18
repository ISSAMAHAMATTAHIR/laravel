<?php

namespace App\Http\Controllers;

use App\Employe;
use Illuminate\Http\Request;

class Controllerupdate extends Controller
{
   public function afficher($id)
   {
        $employes = Employe::find($id);
        return view('update_employe',compact('employes'));
   }  

   public function traiter(Request $request)
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

        $employes = Employe::find($request->id);
        $employes -> nom = $request->nom;
        $employes -> prenom = $request->prenom;
        $employes -> sexe = $request->sexe;
        $employes -> date = $request->date;
        $employes -> lieu = $request->lieu;
        $employes -> age = $request->age;
        $employes -> profession = $request->profession;
        $employes -> paye = $request->paye;
        $employes -> retraite = $request->retraite;
        $employes -> adresse = $request->adresse;
        $employes -> photo = $request->photo;
        $employes ->update();

        flash('employe a ete bien modeifié')->success();
        return redirect('/employe');
   }

   public function delete($id)
   {
        $employes = Employe::find($id);
        $employes->delete();
        flash('l\'employé a été suprimé ')->success();
        return redirect('/employe');
   } 

}
