<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Mail;
use Illuminate\Routing\Controller;
use App\Mail\email;

class Controllercreer extends Controller
{
    public function afficher()
        {
            return view('creer');
        }
    public function envoyer()
    {
        request()->validate
        ([
            'email' => ['required','email'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],
        ]);
            $utilisateur =  \App\Utilisateur::create([
            'email' => request('email'),
            'password' => bcrypt(request('password')),
            'password_confirmation' => bcrypt(request('password_confirmation')),
            
        ]);
        

        return redirect('/');
        
        }

    }
