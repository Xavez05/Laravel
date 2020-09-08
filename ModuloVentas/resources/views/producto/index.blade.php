@extends ('layouts.admin')
@section ('contenido')
<div class="row">
	<div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
		<h3>Listado de Productos @can('crear-producto')
            <a href="/producto/create"><button class="btn btn-success">Nuevo</button></a>
        @endcan</h3>
		{{-- @include('almacen.categoria.search') --}}
	</div>
</div>

<div class="row">
	<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
		<div class="table-responsive">
			<table class="table table-striped table-bordered table-condensed table-hover">
				<thead>
					<th>Id</th>
					<th>Nombre</th>
                    <th>Descripción</th>
                    <th>Tipo</th>
                    @can('editar-producto')
                        <th>Opciones</th>
                    @endcan

				</thead>
               @foreach ($productos as $cat)
				<tr>
					<td>{{ $cat->id}}</td>
					<td>{{ $cat->nombre}}</td>
                    <td>{{ $cat->descripcion}}</td>
                    <td>{{ $cat->id_tipo }}</td>
                    @can('editar-producto')
                    <td>
						<a href="{{URL::action('ProductoController@edit',$cat->id)}}"><button class="btn btn-info">Editar</button></a>
                         <a href="" data-target="#modal-delete-{{$cat->id}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
                    @endcan

				</tr>
				@include('producto.modal')
				@endforeach
			</table>
		</div>
		{{$productos->render()}}
	</div>
</div>

@endsection
