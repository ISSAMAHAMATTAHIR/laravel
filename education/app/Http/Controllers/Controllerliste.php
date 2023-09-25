<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class Controllerliste extends Controller
{
    public function afficher()
    {
        $comptes =\App\Compte::all();
        return view('liste',[
            'compte' => $comptes,
        ]);
    }
}
