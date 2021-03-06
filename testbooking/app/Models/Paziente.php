<?php

namespace App\Models;

use App\Notifications\Privato\Auth\ResetPassword;
use App\Notifications\Privato\Auth\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Paziente extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'paziente';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','codicefiscalepaziente','cognome',
        'nome','telefono','luogonascita',
        'datanascita' , 'residenza',
        'citta','provincia','cap','nazione',
        'email','emailmedico',
    ];

}