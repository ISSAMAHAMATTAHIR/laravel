<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class Controlleraccueil extends Controller
{
    public function accueil()
        {
            return view('accueil');
        }
}