<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class compte extends Model 
{
     protected $fillable = ['email','nom','prenom','parcours','lieu','date','genre','bac','fichier','l1','fichier1','l2','fichier2','l3','fichier3','moyenne','filiere'];
}