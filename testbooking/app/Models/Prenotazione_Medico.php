<?php

namespace App\Models;

use App\Notifications\Privato\Auth\ResetPassword;
use App\Notifications\Privato\Auth\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Prenotazione_Medico extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'prenotazione_medico';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','codicefiscalepaziente','codicelabpubblico',
        'emailmedico','datatampone','orario','tipologia','metodopagamento','prezzo',
        'pagato','esito'
    ];

}