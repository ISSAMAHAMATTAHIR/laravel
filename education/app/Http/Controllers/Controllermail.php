<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\email;
use Illuminate\Http\Request;

class Controllermail extends Controller
{
    public function afficher()
    {
        $email="";
        Mail::to('uvt@info.td')->send(new email($email));
         return view('niveau');
    }
}
