<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


class Banque extends Model
{
    
    protected $fillable = ['date','nom','montant','restant','validation'];
}


