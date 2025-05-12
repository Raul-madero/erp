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
    public function index()
    {
        $requisiciones = Requisiciones::all();
        return view('requisiciones.index', compact('requisiciones'));
    }
}
