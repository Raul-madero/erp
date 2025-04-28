@extends('layouts.admin')

@section('titulo')
    Usuarios
@endsection

@section('navegacion')
    <x-navbar/>
@endsection

@section('contenido')
    <div class="container mx-auto mt-4">
        <h1 class="text-2xl dark:text-gray-400 font-bold">Bienvenido a la página de inicio</h1>
        <p class="mt-2 dark:text-gray-400">Esta es la página de inicio de tu aplicación. Aquí puedes agregar contenido adicional según sea necesario.</p>
        <div class="mt-4">
            <h2 class="text-xl dark:text-gray-400 font-semibold">Contenido adicional</h2>
            <p class="dark:text-gray-400">Aquí puedes agregar más información, gráficos o cualquier otro contenido relevante para tu aplicación.</p>
        </div>
@endsection
