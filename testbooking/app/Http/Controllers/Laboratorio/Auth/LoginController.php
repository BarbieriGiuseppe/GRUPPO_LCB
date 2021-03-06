<?php

namespace App\Http\Controllers\Laboratorio\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use app\Http\Controllers\Laboratorio\HomeController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating laboratorios for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect laboratorios after login.
     *
     * @var string
     */
    protected $redirectTo = '/laboratorio';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('laboratorio.guest:laboratorio', ['except' => 'logout']);
    }

    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('laboratorio');
    }

    /**
     * Show the application's login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showLoginForm()
    {
        return view('laboratorio.auth.login');
    }

    /**
     * Log the laboratorio out of the application.
     *
     * @param \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function logout(Request $request)
    {

        $this->guard()->logout();

        $request->session()->invalidate();

        return $this->loggedOut($request) ?: redirect()->back();
    }

    public function codiceLabPrivato()
    {
        return 'codicelabprivato';

    }

    public function login(Request $request)
    {   
        $input = $request->all();
  
        $this->validate($request, [
            'codicelabprivato' => 'required',
            'password' => 'required',
        ]);
  
        $fieldType = filter_var($request->username, FILTER_VALIDATE_EMAIL) ? 'email' : 'codicelabprivato';
        if(auth()->guard('laboratorio')->attempt(array($fieldType => $input['codicelabprivato'], 'password' => $input['password'])))
        {
            return redirect('laboratorio/home');
        }else{
            return redirect()->route('laboratorio.login')
                ->with('error','Email-Address And Password Are Wrong.');
        }
          
    }

}
