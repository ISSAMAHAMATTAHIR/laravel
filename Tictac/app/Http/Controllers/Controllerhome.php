<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controllerhome extends BaseController
{
    public function afficher()
    {
        if(auth()->guest())
        {
            return redirect('/connecter');
        }
        return view('home');
        
    }
}
