@extends('layouts.admin')

@section('titulo')
    Usuarios
@endsection

@section('navegacion')
    <x-navbar/>
@endsection

@section('contenido')
    <div class="container mx-auto mt-4">
        <div>
            <x-search url="{{ route('user') }}" placeholder="Buscar usuarios" fields="name, user, email, role" />
        </div>
        <div id="userTable" class="relative overflow-x-auto shadow-md">
            @include('user.table', ['users' => $users])
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#searchInput').on('keyup', function () {
                var search = $(this).val();

                // Enviar solicitud AJAX
                $.ajax({
                    url: "{{ route('user') }}",
                    method: 'GET',
                    data: {
                        search: search
                    },
                    success: function (response) {
                        // Actualizar la tabla con los nuevos resultados
                        $('#userTable').html(response);
                    }
                });
            });
        });
    </script>
@endsection
