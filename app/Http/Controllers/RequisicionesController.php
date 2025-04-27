<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RequisicionesController extends Controller
{
    public function index()
    {
        $requisiciones = session()->get('requisiciones', []);
        return view('requisiciones', compact('requisiciones'));
    }

    public function add(Request $request) {
        $requisiciones = session()->get('requisiciones', []);
        $requisicion = [
            'id' => $request->input('id'),
            'nombre' => $request->input('nombre'),
            'cantidad' => $request->input('cantidad'),
            'precio' => $request->input('precio'),
            'total' => $request->input('cantidad') * $request->input('precio')
        ];
        $requisiciones[] = $requisicion;
        session()->put('requisiciones', $requisiciones);
        return redirect()->route('requisiciones');
    }
}
