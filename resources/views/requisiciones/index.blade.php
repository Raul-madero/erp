@extends('layouts.admin')

@section('titulo')
    Requisiciones
@endsection

@section('navegacion')
    <x-navbar/>
@endsection

@section('contenido')
    <div class="container mx-auto mt-4">
        <div class="flex gap-2 justify-between items-center">
            <x-search url="{{ route('requisiciones') }}" placeholder="Buscar requisicion" fields="no_requisicion, fecha, estatus, role" />
            <a href="{{ route('requisiciones.create')}}" class="text-green-900 dark:text-green-300">Nueva requisicion</a>
        </div>
        <div id="requisiciones" class="relative overflow-x-auto shadow-md">
            @include('requisiciones.table', ['requisiciones' => $requisiciones])
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $document.ready(function () {
            $('#searchInput').on('keyup', function() {
                let search = $(this).val();

                //Enviar solicitud AJAX
                $.ajax({
                    url: "{{ route('requisiciones') }}",
                    method: 'GET',
                    data: {
                        search: search
                    },
                    success: function(response) {
                        // Actualizar la tabla con los nuevos resultados
                        $('#requisiciones').html(response);
                    }
                })
            })
        });
    </script>
@endsection
