<?php

namespace App\Http\Controllers;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use App\Mail\Mails;



class Controllercreer extends Controller
{
    public function afficher()
        {   
            return view('creer');
        }
    public function envoyer()
    { 
        Mail::to('cnps@retraite.td')->send(new Mails());
        request()->validate
        ([
            'nom' => ['required'],
            'email' => ['required','email'],
            'password' => ['required','confirmed'],
            'password_confirmation' => ['required'],            
        ]);
        
            $utilisateur =  \App\Utilisateur::create([
            'nom' => request('nom'),
            'email' => request('email'),
            'password' => bcrypt(request('password')), 
            'password_confirmation' => bcrypt(request('password_confirmation')), 
        ]);      
        return redirect('/connexion');

     } 
    
    }
        