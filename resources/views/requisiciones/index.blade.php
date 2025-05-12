@extends('layouts.admin')

@section('titulo')
    Requisiciones
@endsection

@section('navegacion')
    <x-navbar/>
@endsection

@section('contenido')
    <div class="container mx-auto mt-4">
        <div>
            <x-search url="{{ route('requisiciones') }}" placeholder="Buscar requisicion" fields="no_requisicion, fecha, estatus, role" />
        </div>
        <div id="userTable" class="relative overflow-x-auto shadow-md">
            @include('requisiciones.table', ['requisiciones' => $requisiciones])
        </div>
    </div>
@endsection
