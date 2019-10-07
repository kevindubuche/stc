<?php

namespace App\Model\GestionDesCours;

use Illuminate\Database\Eloquent\Model;

class Cour extends Model
{
    protected $fillable=['id,','nom_cours','prix_cours','lieu_cours','comm_cours'];
    public $timestamps = false;

}
