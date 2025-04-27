<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginController extends Controller
{
    //
    public function index()
    {
        return view('auth.login');
    }

    public function login(Request $request)
    {
        // dd($request->all());
        // Validar los datos del formulario
        $request->validate([
            'user' => 'required|min:3',
            'password' => 'required|min:6',
        ]);
        //Tratar de autenticar al usuario
        if(!auth()->attempt($request->only('user', 'password'))){
            return redirect()->back()->with('error', 'Usuario o contrasena incorrectos');
        }
    }
}
