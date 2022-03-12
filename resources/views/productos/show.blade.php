@extends('admin.layout')

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="box box-primary">
                <div class="box-body box-profile">
                  <img class="profile-user-img img-responsive img-circle"
                    src="/adminlte/img/user4-128x128.jpg"
                    alt="{{ $producto->producto }}">

                  <h3 class="profile-username text-center">{{ $producto->producto }}</h3>

                  <ul class="list-group list-group-unbordered">
                    <li class="list-group-item">
                      <b>Tipo</b> <a class="pull-right">{{ $producto->tipo }}</a>
                    </li>
                  </ul>

                  <a href="{{ route('productos.edit', $producto) }}" class="btn btn-primary btn-block"><b>Editar</b></a>
                </div>
            <!-- /.box-body -->
          </div>
        </div>
    </div>
@endsection
