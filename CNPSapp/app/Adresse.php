<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Adresse extends Model
{
    
    protected $fillable = ['numero','telephone','pays_actuel','ville','adresse',];
    public function utilisateurs()
    {
        return $this->belongsTo(Utilisateur::class);
    }
}


