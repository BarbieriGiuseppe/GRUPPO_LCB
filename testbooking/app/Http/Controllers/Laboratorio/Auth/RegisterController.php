<?php

namespace App\Http\Controllers\Laboratorio\Auth;

use App\Models\Laboratorio;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new admins as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect laboratorios after registration.
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
        $this->middleware('laboratorio.guest:laboratorio');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param array $data
     *
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'nomelaboratorio' => ['required', 'string', 'max:255'],
            'codicelabpubblico' => ['required', 'string', 'max:255'],
            'codiceaspubblico' => ['required', 'string', 'max:255'],
            'citta' => ['required', 'string', 'max:255'],
            'indirizzo' => ['required', 'string', 'max:255'],
            'provincia' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:laboratorios'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new laboratorio instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Laboratorio
     */
    protected function create(array $data)
    {
        return Laboratorio::create([
            'nomelaboratorio' => $data['nomelaboratorio'],
            'codicelabpubblico' => $data['codicelabpubblico'],
            'codicelabprivato' => $data['codicelabprivato']->uniqid(),
            'codiceaspubblico' => $data['codiceaspubblico'],
            'citta' => $data['citta'],
            'indirizzo' => $data['indirizzo'],
            'provincia' => $data['provincia'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
        ]);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function showRegistrationForm()
    {
        return view('laboratorio.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('laboratorio');
    }



}
