<?php

namespace App\Models;

use App\Notifications\Azienda\Auth\ResetPassword;
use App\Notifications\Azienda\Auth\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Dipendente extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'dipendente';

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