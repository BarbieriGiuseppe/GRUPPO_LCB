<?php

namespace App\Http\Controllers\Laboratorio;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('laboratorio.auth:laboratorio');
    }

    /**
     * Show the Laboratorio dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('laboratorio.home');
    }
}
