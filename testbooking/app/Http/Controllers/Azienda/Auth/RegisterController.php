<?php

namespace App\Http\Controllers\Azienda\Auth;

use App\Models\Azienda;
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
     * Where to redirect aziendas after registration.
     *
     * @var string
     */
    protected $redirectTo = '/azienda';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('azienda.guest:azienda');
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
            'nome' => ['required', 'string', 'max:255'],
            'cognome' => ['required', 'string', 'max:255'],
            'codicefiscale' => ['required', 'string', 'max:16'],
            'datanascita' => ['required', 'date', 'max:255'],
            'nazionalita' => ['required', 'string', 'max:255'],
            'luogonascita' => ['required', 'string', 'max:255'],
            'residenza' => ['required', 'string', 'max:255'],
            'citta' => ['required', 'string', 'max:255'],
            'provincia' => ['required', 'string', 'max:255'],
            'cap' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:privatos'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new azienda instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Azienda
     */
    protected function create(array $data)
    {
        return Azienda::create([
            'nome' => $data['nome'],
            'cognome' => $data['cognome'],
            'codicefiscale' => $data['codicefiscale'],
            'datanascita' => $data['datanascita'],
            'nazionalita' => $data['nazionalita'],
            'luogonascita' => $data['luogonascita'],
            'residenza' => $data['residenza'],
            'citta' => $data['citta'],
            'provincia' => $data['provincia'],
            'cap' => $data['cap'],
            'telefono' => $data['telefono'],
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
        return view('azienda.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('azienda');
    }
}
