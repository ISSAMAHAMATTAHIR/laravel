<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ControllerAmis extends Controller
{
         public function afficher()
        {
            return view('amis');
        }

}
