<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ControllerMusique extends Controller
{
         public function afficher()
        {
            return view('musique');
        }

}
