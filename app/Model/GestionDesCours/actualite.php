<?php

namespace App\Model\GestionDesCours;

use Illuminate\Database\Eloquent\Model;

class actualite extends Model
{
    protected $fillable=['date_post,','title','source','content'];
}
