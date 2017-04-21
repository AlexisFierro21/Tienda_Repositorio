@extends('store.template')
@section('content')
<div class="container text-center">
	<div class="page-header">
		<h2 class="titulo-librit">{{$resultado->titulo}}</h2>
	</div>
		<div class="row">
			<div class="col-md-6">
				<div class="libro-bloc">
					<img class="showww" src="{{$resultado->image}}" width="300">	
				</div>
			</div>
			<div class="col-md-6 libro-bloc">	
				<div class="libro-bloc">
					<h3>{{$resultado->titulo}}</h3>
					<div class="libro-info">
						<p>{{$resultado->reseña}}</p>
						<h3><span class="label label-success">Precio : ${{number_format($resultado->precio,2)}}</span>
							</h3>
						<p>
							<h3><a class="btn btn-default btn-lg btn-block" href="#"><i class="fa fa-cart-plus"> La quiero</i></a></h3>
						</p>
					</div>
				</div>
			</div>
		</div>
</div>
@stop