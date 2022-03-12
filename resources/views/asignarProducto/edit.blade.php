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
                    <form method="POST" action="{{ route('clientes.update', $cliente) }}">
                        {{ csrf_field() }} {{ method_field('PUT') }}

                        <div class="form-group">
                            <label for="codigo">Codigo:</label>
                            <input name="codigo" value="{{ old('codigo', $cliente->codigo) }}" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="nombres">Nombres:</label>
                            <input name="nombres" value="{{ old('nombres', $cliente->nombres) }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="appellidos">Apellidos:</label>
                            <input name="appellidos" value="{{ old('appellidos', $cliente->apellidos) }}" class="form-control">
                        </div>

                        <button class="btn btn-primary btn-block">Actualizar Cliente</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
