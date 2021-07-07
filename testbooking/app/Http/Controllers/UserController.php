<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserController extends Controller
{

    public function showUsers($id)
    {
        $user = User::findOrFail($id);

        return view('homeprivato',compact('user'));
    }

    public function createPrivatoUser()
    {
        return view ('registrazioneprivato');
    }

    public function savePrivatoUser(Request $request)
    {
       $user = new User;
       $user->CodiceFiscale = $request->CodiceFiscale;
       $user->Cognome = $request->Cognome;
       $user->Nome = $request->Nome;
       $user->Password = $request->Password; 
       $user->save();

       return redirect()->back()->withErrors($validator)->withInput()->with("Registrazione avvenuta con successo");
    }

}