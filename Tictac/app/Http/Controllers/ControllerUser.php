<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ControllerUser extends Controller
{
         public function afficher()
        {
            return view('user');
        }

}
