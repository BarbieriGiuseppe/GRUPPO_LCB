<?php

namespace App\Models;

use App\Notifications\Privato\Auth\ResetPassword;
use App\Notifications\Privato\Auth\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dipendente extends Authenticatable
{
    use HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
            'id','codicefiscaledipendente','cognome',
           'nome','telefono','luogonascita',
           'datanascita' , 'residenza',
           'citta','provincia','cap','nazione',
           'email','emaildatore',
    ];

}