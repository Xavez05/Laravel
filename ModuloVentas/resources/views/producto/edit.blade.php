@extends ('layouts.admin')
@section ('contenido')
	<div class="row">
		<div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
			<h3>Editar Producto: {{ $producto->nombre}}</h3>
			@if (count($errors)>0)
			<div class="alert alert-danger">
				<ul>
				@foreach ($errors->all() as $error)
					<li>{{$error}}</li>
				@endforeach
				</ul>
			</div>
			@endif

			{!!Form::model($producto,['method'=>'PATCH','route'=>['producto.update',$producto->id]])!!}
            {{Form::token()}}
            <div class="form-group">
            	<label for="nombre">Nombre</label>
            	<input type="text" name="nombre" class="form-control" value="{{$producto->nombre}}" placeholder="Nombre...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Descripción</label>
            	<input type="text" name="descripcion" class="form-control" value="{{$producto->descripcion}}" placeholder="Descripción...">
            </div>
            <div class="form-group">
            	<label for="descripcion">Tipo de Producto</label>
            	<select class="form-control" name="tipoProducto">
                    <option value="0">-</option>
                    @foreach ($tipos as $tipo)
                    @if ($tipo->id == $producto->id_tipo)
                    <option value="{{$tipo->id}}" selected>{{$tipo->nombre}}</option>
                    @else
                    <option value="{{$tipo->id}}">{{$tipo->nombre}}</option>
                    @endif

                    @endforeach
            	</select>
            </div>
            <div class="form-group">
            	<button class="btn btn-primary" type="submit">Guardar</button>
            	<a href="/producto"><button type="button" class="btn btn-danger" data-dismiss="modal">Cancelar</button></a>
            </div>

			{!!Form::close()!!}

		</div>
	</div>
@endsection
