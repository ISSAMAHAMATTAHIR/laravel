<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employe extends Model 
{
    protected $fillable = ['nom','prenom','sexe','date','lieu','age','profession','paye','retraite','adresse','photo'];
}



   
