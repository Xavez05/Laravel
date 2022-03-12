@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos del Cliente</h3>
                </div>
                <div class="box-body">
                    @include('partials.error-messages')
                    <form method="POST" action="{{ route('clientes.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="coigo">Codigo:</label>
                            <input name="codigo" value="{{ old('codigo') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input name="nombres" value="{{ old('nombres') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="apellidos">Apellidos:</label>
                            <input name="apellidos" value="{{ old('apellidos') }}" class="form-control">
                        </div>

                        <button class="btn btn-primary btn-block">Crear Cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
