<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;

class UserController extends Controller
{
    //
    public function index()
    {
        //Mostrar vista de usuarios
        return view('user.index');
    }

    public function create()
    {
        //Mostrar vista de crear usuario
        return view('user.create');
    }

    public function store(Request $request)
    {
        //Guardar al usuario
        //Modificar el request para validar al usuario
        $request->request->add(['user' => Str::slug($request->get('user'))]);
        //Validar datos
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'user' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'role' => 'required'
        ]);

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user' => $request->get('user'),
            'role' => $request->get('role'),
            'password' => bcrypt($request->get('password')),
        ]);
        //Redireccionar a la vista de usuarios
        return redirect()->route('user')->with('success', 'Usuario creado correctamente');
    }

    public function edit($id)
    {
        //Mostrar vista de editar usuario
        $user = User::findOrFail($id);
        return view('user.edit', compact('user'));
    }
    public function update(Request $request, $id)
    {
        //Actualizar usuario
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'user' => 'required|string|max:255|unique:users,user,' . $user->id,
            'password' => 'nullable|string|min:8|confirmed',
            'role' => 'required'
        ]);

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user' => $request->get('user'),
            'role' => $request->get('role'),
            'password' => bcrypt($request->get('password')),
        ]);
        //Redireccionar a la vista de usuarios
        return redirect()->route('user')->with('success', 'Usuario actualizado correctamente');
    }
}
