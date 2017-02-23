<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SessionController extends Controller
{
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'destroy']);

    }

    public function create() {
        return view('session.create');
    }

    public function store() {

        $this->validate(request(), [
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);

        // Intentamos autentificar al usuario

        if (!auth()->attempt(request(['email', 'password']))) {
            return back()
                ->with([
                'message'   =>  'Tu credenciales son invalidos, verificalos y volve a intentar!'
            ]);
        }

        return redirect()->home();

    }

    public function destroy() {

        auth()->logout();

        return redirect()->home();
        //return view('/');
    }
}
