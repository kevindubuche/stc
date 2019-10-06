<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
  
    protected $table='login';
    protected $primaryKey="id";
    protected $fillable=['email','password'];
    public $timestamps=false;

    public function username()
    {
        return $this->email;
    }
    function getAuthPassword()
    {
        return $this->password;
    }

    
}
