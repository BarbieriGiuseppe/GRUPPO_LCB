<?php

namespace App\Http\Controllers\Medico\Auth;

use App\Models\Medico;
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
     * Where to redirect medicos after registration.
     *
     * @var string
     */
    protected $redirectTo = '/medico/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('medico.guest:medico');
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

            'codicefiscale' => ['required', 'string', 'max:16'],
            'cognome' => ['required', 'string', 'max:255'],
            'nome' => ['required', 'string', 'max:255'],
            'telefono' => ['required', 'string', 'max:255'],
            'datanascita' => ['required', 'date', 'max:255'],
            'luogonascita' => ['required', 'string', 'max:255'],
            'residenza' => ['required', 'string', 'max:255'],
            'citta' => ['required', 'string', 'max:255'],
            'provincia' => ['required', 'string', 'max:255'],
            'cap' => ['required', 'string', 'max:255'],
            'nazione' => ['required', 'string', 'max:255'],
            'nomestudiomedico' => ['required', 'string', 'max:255'],
            'partitaiva' => ['required', 'string', 'max:255'],
            'indirizzostudio' => ['required', 'string', 'max:255'],
            'cittastudio' => ['required', 'string', 'max:255'],
            'provinciastudio' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:medicos'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new medico instance after a valid registration.
     *
     * @param array $data
     *
     * @return \App\Models\Medico
     */
    protected function create(array $data)
    {
        return Medico::create([

            'codicefiscale' => $data['codicefiscale'],
            'cognome' => $data['cognome'],
            'nome' => $data['nome'],
            'telefono' => $data['telefono'],
            'datanascita' => $data['datanascita'],
            'luogonascita' => $data['luogonascita'],
            'residenza' => $data['residenza'],
            'citta' => $data['citta'],
            'provincia' => $data['provincia'],
            'cap' => $data['cap'],
            'nazione' => $data['nazione'],
            'nomestudiomedico' => $data['nomestudiomedico'],
            'partitaiva' => $data['partitaiva'],
            'cittastudio' => $data['cittastudio'],
            'indirizzostudio' => $data['indirizzostudio'],
            'provinciastudio' => $data['provinciastudio'],
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
        return view('medico.auth.register');
    }

    /**
     * Get the guard to be used during registration.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard('medico');
    }
}
