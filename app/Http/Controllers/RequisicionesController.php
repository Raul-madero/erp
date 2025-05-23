<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Requisiciones;
use App\Models\DetalleRequisicion;
use App\Models\Product;
use App\Models\Departamento;
use App\Models\Unit;

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
        $detalle_requisicion = DetalleRequisicion::with('productos')->get();
        $requisiciones = Requisiciones::with('departamento')->orderBy('no_requisicion', 'desc')->when($search, function ($query, $search) {
            return $query->where('observaciones', 'LIKE', "%{$search}%")
            ->orWhere('no_requisicion', 'LIKE', "%{$search}%")
            ->orWhere('fecha', 'LIKE', "%{$search}%")
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

    public function create() {
        $productos = Product::all();
        $no_requisicion = Requisiciones::max('no_requisicion') + 1;
        $departamento = Departamento::all();
        $unidades = Unit::all();
        return view('requisiciones.create', compact('productos', 'no_requisicion', 'departamento', 'unidades'));
    }
}
