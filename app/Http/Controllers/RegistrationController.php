<?php

namespace App\Http\Controllers;

use App\Http\Requests\RegistrationForm;
use App\User;
use App\Mail\Welcome;
use Illuminate\Http\Request;


class RegistrationController extends Controller
{
    public function create() {
        return view('registration.create');
    }

    public function store(RegistrationForm $form) {

        // Valida el formulario
        /* Se mudo al RegistrationRequest
        $this->validate(request(), [
            'name'  =>  'required',
            'email' =>  'required|email',
            'password'  =>  'required|confirmed'
        ]);
        */

        // Crear y guardar al usuario
        /* Se mudo al RegistrationRequest como objeto del formulario
        $user = User::create([
            'name'  =>  request('name'),
            'email' =>  request('email'),
            'password'  =>  bcrypt(request('password'))
        ]);

        // Loguear al usuario
        auth()->login($user);

        // Enviar el mail de bienvenida
        \Mail::to($user)->send(new Welcome($user));
        */

        $form->persist();

        // Redireccionar a la pagina de inicio
        return redirect()->home();

    }
}
