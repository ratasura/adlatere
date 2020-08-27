@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-8 col-sm-8 col-xs-12">
            <h3>Perosnas <a href="/almacen/articulo/create"><button class="btn btn-success">Nueva Persona</button></a> </h3>
            {{-- @include('almacen.articulo.search') --}}
        </div>
    </div>
    <div class="row">
		<example-component></example-component>
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <table class="table table-light">
                <thead>
					<th>Nombres</th>
					<th>Correo</th>
					<th>Dirección</th>
					<th>Tipo</th>
					<th>Opciones</th>
                </thead>
                @foreach ($personas as $persona)
				<tr>
					<td>{{$persona->nombres}}</td>
					<td>{{$persona->email}}</td>
					<td>{{$persona->direccion}}</td>
					<td>{{$persona->tipo}}</td>
					
					<td>
						<a href="{{URL::action('ArticuloController@edit',$art->idarticulo)}}"><button class="btn btn-info">Editar</button></a>
						<a href="" data-target="#modal-delete-{{$art->idarticulo}}" data-toggle="modal"><button class="btn btn-danger">Eliminar</button></a>
					</td>
				</tr>
				@endforeach
            </table>
        </div>
    </div>
</div>
@endsection
