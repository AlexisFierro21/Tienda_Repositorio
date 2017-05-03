@extends('store.template')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h2 class="titulo-librit">Carrito de compras</h2>
	</div>
<div class="tabla-cart">
@if(count($cart))
<div class="table-responsive">
	<table class="table table-stripped table-hover table-border">
	<thead>
		<tr>
			<th>Titulo</th>
			<th>Autor</th>
			<th>Editorial</th>
			<th>Precio</th>
			<th>Eliminar</th>
		</tr>
	</thead>
		<tbody>
		@foreach($cart as $item)
		<tr>
		<td>{{$item->titulo}}</td>
		<td>{{$item->autor}}</td>
		<td>{{$item->nombre}}</td>
		<td>${{number_format($item->precio,2)}}</td>
		<td>
			<a href="{{route('cart-delete',$item->id)}}" class="btn btn-danger">
				<i class="fa fa-remove"></i>
			</a>
		</td>
		</tr>
		@endforeach
			
		</tbody>
	</table><hr>
	<h3><span class="label label-success">Total: ${{number_format($item->precio,2)}}</span></h3>
</div>
@else
<h3><span class=" main-title">No hay productos en el carrito</span></h3>
@endif
</div>
<br>
<div class="btn-group btn-group-justified " role="group" ariable="Justified button group">
<a href="{{route('home')}}" class="btn btn-primary rad"><i class="fa fa-chevron-circle-left fa-2x"> Seguir comprando</i></a>
	<a href="{{route('cart-trash')}}" class="btn btn-danger"><i class="fa fa-trash fa-2x">Vaciar carrito</i></a>	
	<a href="" class="btn btn-success"><i class="fa fa-chevron-circle-right fa-2x">Comprar</i></a>
</div>





</div>
@stop