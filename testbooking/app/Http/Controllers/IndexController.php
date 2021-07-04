<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function index(){
        return view('index');
    }

    public function labdib(){
        return view('infolab.labdib');
    }

    public function labpoli(){
        return view('infolab.labpoli');
    }
}
