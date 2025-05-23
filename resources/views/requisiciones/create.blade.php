@extends('layouts.admin')

@section('titulo')
    Nueva Requisicion
@endsection

@section('navegacion')
    <x-Navbar/>
@endsection

@section('contenido')
    <h1 class="w-full text-center text-gray-700 dark:text-gray-400 font-bold text-2xl mb-5">Nueva Requisicion</h1>
    <div class="w-11/12 mx-auto p-6 border-2 border-gray-200 rounded-xl bg-gray-100 dark:bg-gray-800 shadow-2xl">
        <form action="{{ route('user')}}" method="post" class="w-full">
            @csrf
            <div class="flex gap-2 items-center justify-between w-11/12 mx-auto">
                <div class="relative z-0 w-5/12 mx-auto mb-5 group">
                    @error('fecha')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input id="datepicker-actions" datepicker datepicker-autoselect-today datepicker-format = "dd-mm-yyyy" type="text" name="fecha" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" value={{ old('fecha') }}>
                    </div>
                    <label for="name" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6 ">Fecha</label>
                </div>
                <div class="relative z-0 w-5/12 mx-auto mb-5 group">
                    <input
                        type="text"
                        name="no_requisicion"
                        id="no_requisicion"
                        class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-auto  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer text-center text-bold text-orange-500"
                        placeholder="Tu correo"
                        value="REQ-{{ $no_requisicion }}"
                        readonly>
                    <label for="no_requisicion" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">No. requisicion</label>
                </div>
            </div>
            <div class="flex justify-between items-center w-11/12 mx-auto">
                <div class="relative w-3/12 mx-auto z-0 mb-5 group">
                    @error('fecha_requiere')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <div class="relative max-w-sm">
                        <div class="absolute inset-y-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                <path d="M20 4a2 2 0 0 0-2-2h-2V1a1 1 0 0 0-2 0v1h-3V1a1 1 0 0 0-2 0v1H6V1a1 1 0 0 0-2 0v1H2a2 2 0 0 0-2 2v2h20V4ZM0 18a2 2 0 0 0 2 2h16a2 2 0 0 0 2-2V8H0v10Zm5-8h10a1 1 0 0 1 0 2H5a1 1 0 0 1 0-2Z"/>
                            </svg>
                        </div>
                        <input id="datepicker-actions" name="fecha_requiere" datepicker datepicker-buttons datepicker-autoselect-today type="text" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full ps-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Select date" value="{{ old('fecha_requiere') }}">
                    </div>
                    <label for="user" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Fecha en la que se requiere</label>
                </div>
                <div class="relative w-3/12 mx-auto z-0 mb-5 group">
                    @error('tipo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="tipo" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option class="dark: bg-gray-800 dark:text-gray-400" selected>Tipo de Requisicion</option>
                        <option class="dark: bg-gray-800 dark:text-gray-400" value="Normal">Normal</option>
                        <option class="dark: bg-gray-800 dark:text-gray-400" value="Urgente">Urgente</option>
                    </select>
                    <label for="password" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Tipo</label>
                </div>
                <div class="relative w-3/12 mx-auto z-0 mb-5 group">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="tipo" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option class="dark: bg-gray-800 dark:text-gray-400" selected>Departamento</option>
                        @foreach($departamento as $dep)
                            <option class="dark: bg-gray-800 dark:text-gray-400" value="{{$dep->id}}">{{$dep->nombre}}</option>
                        @endforeach
                    </select>
                    <label for="password_confirmation" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Area Solicitante</label>
                </div>
            </div>
            <div class="flex justify-between items-center w-11/12 mx-auto">
                <div class="relative w-2/12 mx-auto z-0 mb-5 group">
                    @error('tipo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="tipo" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option class="dark: bg-gray-800 dark:text-gray-400" selected>No. de unidad</option>
                        @foreach($unidades as $unidad)
                            <option class="dark: bg-gray-800 dark:text-gray-400" value="{{$unidad->id}}">{{$unidad->no_unidad}}</option>
                        @endforeach
                    </select>
                    <label for="password" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">No. de unidad</label>
                </div>
                <div class="relative w-2/12 mx-auto z-0 mb-5 group">
                    @error('tipo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <input
                        type="text"
                        name="no_requisicion"
                        id="no_requisicion"
                        class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-auto  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer text-center text-bold text-gray-500 dark:text-gray-400"
                        placeholder="Descripcion"
                        {{-- value="{{  }}" --}}
                        readonly>
                    <label for="password" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Descripcion</label>
                </div>
                <div class="relative w-2/12 mx-auto z-0 mb-5 group">
                    @error('tipo')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <input
                        type="text"
                        name="no_requisicion"
                        id="no_requisicion"
                        class="block py-2.5 px-0 w-full text-sm bg-transparent border-0 border-b-2 border-gray-300 appearance-auto  dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer text-center text-bold text-gray-500 dark:text-gray-400"
                        placeholder="Tipo Unidad"
                        {{-- value="{{  }}" --}}
                        readonly>
                    <label for="password" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Tipo Unidad</label>
                </div>
                <div class="relative w-2/12 mx-auto z-0 mb-5 group">
                    @error('password_confirmation')
                        <p class="text-red-500 text-xs italic">{{ $message }}</p>
                    @enderror
                    <label for="underline_select" class="sr-only">Underline select</label>
                    <select id="underline_select" name="tipo" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                        <option class="dark: bg-gray-800 dark:text-gray-400" selected>Proveedor</option>
                        @foreach($departamento as $dep)
                            <option class="dark: bg-gray-800 dark:text-gray-400" value="{{$dep->id}}">{{$dep->nombre}}</option>
                        @endforeach
                    </select>
                    <label for="password_confirmation" class="peer-focus:font-medium absoliute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placehorlder-shown:translate-y-0 peer-focus:scale-75 peer-focus:translate-y-6">Area Solicitante</label>
                </div>
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
