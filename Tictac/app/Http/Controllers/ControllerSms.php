<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller;

class ControllerSms extends Controller
{
         public function afficher()
        {
            return view('message');
        }

}
