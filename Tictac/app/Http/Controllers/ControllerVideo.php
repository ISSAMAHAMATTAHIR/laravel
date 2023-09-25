<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;


class ControllerVideo extends Controller
{
     public function afficher()
     {
         return view('video');
     }
}
