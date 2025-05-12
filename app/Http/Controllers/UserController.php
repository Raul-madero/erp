<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;
use App\Models\User;
use Illuminate\Support\Facades\Log;
use App\Models\Role;

class UserController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        // Log::info('Search term: ' . $request->input('search'));
        //Mostrar vista de usuarios
        $search = $request->input('search');

        $users = User::with('role')
            ->when($search, function ($query, $search) {
                return $query->where('name', 'like', '%' . $search . '%')
                             ->orWhere('user', 'like', '%' . $search . '%')
                             ->orWhereHas('role', function ($query) use ($search) {
                                 $query->where('role', 'like', '%' . $search . '%');
                             });
            })
            ->paginate(10);  // Paginación

        // Si la solicitud es AJAX, devolver solo la tabla
        if ($request->ajax()) {
            return view('user.table', ['users' => $users]);
        }

        // De lo contrario, devolver la vista completa
        return view('user.index', ['users' => $users]);
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
            'email' => 'string|email|max:255|',
            'user' => 'required|string|max:255|unique:users',
            'password' => 'required|string|min:8|confirmed',
            'id_role' => 'required'
        ]);

        User::create([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user' => $request->get('user'),
            'id_role' => $request->get('role'),
            'password' => bcrypt($request->get('password')),
        ]);
        //Redireccionar a la vista de usuarios
        return redirect()->route('user')->with('success', 'Usuario creado correctamente');
    }

    public function edit($id)
    {
        //Mostrar vista de editar usuario
        $user = User::findOrFail($id);
        $roles = Role::all();
        return view('user.edit', compact(['user', 'roles']));
    }
    public function update(Request $request, $id)
    {
        //Actualizar usuario
        $user = User::findOrFail($id);
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|',
            'user' => 'required',
            'password' => 'nullable|string|min:8|confirmed',
            'id_role' => 'required'
        ]);

        $user->update([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user' => $request->get('user'),
            'id_role' => $request->get('id_role'),
            'password' => bcrypt($request->get('password')),
        ]);
        //Redireccionar a la vista de usuarios
        return redirect()->route('user')->with('success', 'Usuario actualizado correctamente');
    }
}
