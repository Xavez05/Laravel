@extends('admin.layout')


@section('header')
    <h1>
        Clientes
    </h1>
    <ol class="breadcrumb">
        <li><a href="{{ route('dashboard') }}"><i class="fa fa-dashboard"></i> Inicio</a></li>
        <li class="active">Clientes</li>
    </ol>
@stop

@section('content')
    <div class="box box-primary">
        <div class="box-header">
            <h3 class="box-title">Listado de clientes</h3>
{{--            @can('create', $productos->first())--}}
                <a href="{{ route('clientes.create') }}" class="btn btn-primary pull-right">
                    <i class="fa fa-plus"></i>  Crear Cliente
                </a>
{{--            @endcan--}}
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <table id="clientes-table" class="table table-bordered table-striped">
                <thead>
                <tr>
                    <th>ID</th>
                    <th>Codigo</th>
                    <th>Nombres</th>
                    <th>Apellidos</th>
                    <th>Acciones</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($clientes as $cliente)
{{--                    @can('view', $producto)--}}
                        <tr>
                            <td>{{ $cliente->id }}</td>
                            <td>{{ $cliente->codigo }}</td>
                            <td>{{ $cliente->nombres }}</td>
                            <td>{{ $cliente->apellidos }}</td>
                            <td>
                                    <a href="{{ route('clientes.show', $cliente) }}"
                                       class="btn btn-xs btn-default"
                                    ><i class="fa fa-eye"></i></a>

                                    <a href="{{ route('clientes.edit', $cliente) }}"
                                       class="btn btn-xs btn-info"
                                    ><i class="fa fa-pencil"></i></a>

                                    <form method="POST"
                                          action="{{ route('clientes.destroy', $cliente) }}"
                                          style="display: inline">
                                        {{ csrf_field() }} {{ method_field('DELETE') }}
                                        <button class="btn btn-xs btn-danger"
                                                onclick="return confirm('¿Estás seguro de querer eliminar esta usuario?')"
                                        ><i class="fa fa-times"></i></button>
                                    </form>
                            </td>
                        </tr>
{{--                    @endcan--}}
                @endforeach
                </tbody>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
@stop

@push('styles')
    <link rel="stylesheet" href="/adminlte/plugins/datatables/dataTables.bootstrap.css">
@endpush

@push('scripts')
    <script src="/adminlte/plugins/datatables/jquery.dataTables.min.js"></script>
    <script src="/adminlte/plugins/datatables/dataTables.bootstrap.min.js"></script>
    <script>
        $(function () {
            $("#clientes-table").DataTable();
        });
    </script>
@endpush