<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class Controllerphoto extends Controller
{
         public function afficher()
        {
            return view('photo');
        }

}
