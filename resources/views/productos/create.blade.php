@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-6">
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Datos del Producto</h3>
                </div>
                <div class="box-body">
                    @include('partials.error-messages')
                    <form method="POST" action="{{ route('productos.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="producto">Nombre:</label>
                            <input name="producto" value="{{ old('producto') }}" class="form-control">
                        </div>

                        <div class="form-group">
                            <label for="tipo">Tipo:</label>
                            <input name="tipo" value="{{ old('tipo') }}" class="form-control">
                        </div>

                        <button class="btn btn-primary btn-block">Crear Producto</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection
