<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Asl;
use Auth;
use App\Controllers\Asl\Auth\LoginController;
use Illuminate\Http\Request;
use Illuminate\Auth\AuthManager;
use app\Http\Middleware\RedirectIfAsl;
use app\Http\Middleware\RedirectIfNotAsl;
use DB;
use App\Models\Prenotazione_Privato;
use Yajra\DataTables\Html\Button;

class TabellaPrivatoController extends Controller
{
    //
}
