<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisiciones;

class RequisicionesController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index(Request $request)
    {
        $search = $request->input('search');
        $requisiciones = Requisiciones::with('departamento')->orderBy('no_requisicion', 'desc')->when($search, function ($query, $search) {
            return $query->where('observaciones', 'LIKE', "%{$search}%")
            ->orWhere('no_requisicion', 'LIKE', "%{$search}%")
            ->orWhere('fecha_solicitud', 'LIKE', "%{$search}%")
            ->orWhere('fecha_requiere', 'LIKE', "%{$search}%")
            ->orWhere('tipo_requisicion', 'LIKE', "%{$search}%")
            ->orWhereHas('departamento', function ($query) use ($search) {
                $query->where('nombre', 'LIKE', "%{$search}%");
            });
        })->paginate(10);

        if ($request->ajax()) {
            return view('requisiciones.table', ['requisiciones' => $requisiciones]);
        }

        return view('requisiciones.index', compact('requisiciones'));
    }
}
