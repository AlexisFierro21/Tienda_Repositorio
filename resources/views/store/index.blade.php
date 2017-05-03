@extends('store.template')
@section('content')
<div class="container text-center">
	<section id="libros">
		@foreach($libros as $libro)
			<article class="libro white-panel">
			<h3>{{$libro->titulo}}</h3><hr>
			<img src="{{ $libro->image }}" width="150">
				<div class="libro-info panel">
				<p>{{$libro->autor}}</p>
				<h3><span class="label label-success">Precio : ${{number_format($libro->precio,2)}}</span>
				</h3>
				<p>
					<a class="btn btn-warning btn-tex" href="{{route('cart-add',$libro->id)}}"><i class="fa fa-cart-plus fa-1x"></i> La quiero</a>
					<a class="btn btn-primary btn-tex" href="{{route('libro-deta',$libro->id)}}"><i class="fa fa-chevron-circle-right fa-1x"></i> Leer mas</a><!--Esta linea es para generar la ruta con el id del libro seleccionado-->
				</p>

				</div>
			</article>
@endforeach
	</section>
</div>

@stop
