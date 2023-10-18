<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class Controllerliste extends Controller
{
    public function afficher()
    {
        $employes =\App\Employe::all();
        return view('liste',[
            'employe' => $employes,
        ]);
    }
    
}
