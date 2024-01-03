<?php

namespace App\Models;

use App\Notifications\Privato\Auth\ResetPassword;
use App\Notifications\Privato\Auth\VerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class Prenotazione_Privato extends Authenticatable
{
    use HasFactory, Notifiable;
    protected $table = 'prenotazione_privato';
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'id','codicefiscaletamponato','codicelabpubblico',
        'emailprivato','datatampone','orario','tipologia','metodopagamento','prezzo',
        'pagato','esito'
    ];

}