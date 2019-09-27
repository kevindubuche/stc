<?php

namespace App\Model\GestionDesCours;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable=['nom_user,','prenom_user','adress','email_user','telephone','date_cours'];
    //protected $guarded=[];
    
}
