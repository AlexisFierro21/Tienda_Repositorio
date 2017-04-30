@extends('store.template')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h2 class="titulo-librit">{{$resultado->titulo}}</h2>
	</div>
		<div class="row">
			<div class="col-md-6">
				<div class="libro-bloc">
					<img class="showww" src="{{$resultado->image}}">	
				</div>
			</div>
			<div class="col-md-6">	
				<div class="libro-bloc">
					<h3>{{$resultado->titulo}}</h3>
					<div class="libro-info panel">
						<p><div class="container justi">{{$resultado->reseña}}</div></p>
						<h3>
						<span class="label label-success">Precio : ${{number_format($resultado->precio,2)}}</span>
							</h3>
						<p>
							<h3><a class="btn btn-default btn-lg btn-block" href="{{route('cart-add',$resultado->id_libro)}}"><i class="fa fa-cart-plus"> La quiero</i></a></h3>
						</p>
					</div>
				</div>
			</div>
		</div>
</div>
@stop