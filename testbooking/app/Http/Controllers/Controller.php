<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function welcome()
    {
      return view("html.welcome");
    }
    public function LabDib()
    {
      return view("infolaboratori.labdib");
    }
    public function LabPoli()
    {
      return view("html.labpoli");
    }
    public function LoginAzienda()
    {
      return view("html.loginazienda");
    }
    public function LoginPrivato()
    {
      return view("loginprivato");
    }
    public function LoginMedico()
    {
      return view("html.loginmedico");
    }	
    public function LoginLab()
    {
      return view("html.loginlab");
    }
    public function AreaAsl()
    {
      return view("html.areaasl");
    }

}

