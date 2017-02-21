<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }

    public function store() {

        // Valida el formulario
        $this->validate(request(), [
            'name'  =>  'required',
            'email' =>  'required|email',
            'password'  =>  'required|confirmed'
        ]);

        // Crear y guardar al usuario
        $user = User::create([
            'name'  =>  request('name'),
            'email' =>  request('email'),
            'password'  =>  bcrypt(request('password'))
        ]);

        // Loguear al usuario
        auth()->login($user);

        // Redireccionar a la pagina de inicio
        return redirect()->home();

    }
}
