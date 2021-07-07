<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticable;

class Utente_Privato extends Authenticable{
    use Notifiable;

    protected $table = "profilo_privato";

    protected $guard = "utente_privato";

    protected $fillable = [
        'Mail' , 'Password',
    ];

    protected $hidden = [
        'Password' , 'remember_token', 
    ];





}

?>