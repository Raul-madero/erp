@extends('layouts.admin')

@section('titulo')
    Crear Usuario
@endsection

@section('navegacion')
    <x-Navbar/>
@endsection

@section('contenido')
    <h1 class="w-full text-center text-gray-700 dark:text-gray-400 font-bold text-2xl mb-5">Registro Nuevo Usuario</h1>
    <div class="w-11/12 mx-auto p-6 border-2 border-gray-200 rounded-xl bg-gray-100 dark:bg-gray-800 shadow-2xl">
        <form action="{{ route('user')}}" method="post" class="w-full">
            @csrf
            <div class="relative z-0 w-11/12 mx-auto mb-5 group">
                @error('name')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <input
                    type="text"
                    name="name"
                    id="name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-auto dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('name') border-red-500 @enderror"
                    placeholder="Tu nombre"
                    value="{{ old('name') }}">
                <label for="name" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Nombre Completo</label>
            </div>
            <div class="relative z-0 w-11/12 mx-auto mb-5 group">
                @error('email')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <input
                    type="email"
                    name="email"
                    id="email"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-auto dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('email') border-red-500 @enderror"
                    placeholder="Tu correo"
                    value="{{ old('email') }}">
                <label for="email" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Nombre Completo</label>
            </div>
            <div class="relative z-0 w-11/12 mx-auto mb-5 group">
                @error('user')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <input
                    type="text"
                    name="user"
                    id="user"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-auto dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('user') border-red-500 @enderror"
                    placeholder="Tu usuario"
                    value="{{ old('user') }}">
                <label for="user" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Nombre de Usuario</label>
            </div>
            <div class="relative z-0 w-11/12 mx-auto mb-5 group">
                @error('password')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <input
                    type="password"
                    name="password"
                    id="password"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-auto dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('password') border-red-500 @enderror"
                    placeholder="Tu password">
                <label for="password" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Password</label>
            </div>
            <div class="relative z-0 w-11/12 mx-auto mb-5 group">
                @error('password_confirmation')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <input
                    type="password"
                    name="password_confirmation"
                    id="password_confirmation"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-auto dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('password_confirmation') border-red-500 @enderror"
                    placeholder="Confirma tu password">
                <label for="password_confirmation" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Confirma tu Password</label>
            </div>
            <div class="relative z-0 w-11/12 mx-auto mb-5 group">
                @error('role')
                    <p class="text-red-500 text-xs italic">{{ $message }}</p>
                @enderror
                <input
                    type="text"
                    name="role"
                    id="role"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-auto dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer @error('role') border-red-500 @enderror"
                    placeholder="Rol"
                    value="{{ old('role') }}">
                <label for="role" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Rol</label>
            </div>
            <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full mx-auto block sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Crear</button>
        </form>
    </div>
@endsection
