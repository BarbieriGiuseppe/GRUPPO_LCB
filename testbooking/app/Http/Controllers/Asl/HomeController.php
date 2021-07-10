<?php

namespace App\Http\Controllers\Asl;

use App\Http\Controllers\Controller;
$user = Auth::user();

// Get the currently authenticated user's ID...
$id = Auth::id();
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('asl.auth:asl');
    }

    /**
     * Show the Asl dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index() {
        return view('asl.home');
    }
}
