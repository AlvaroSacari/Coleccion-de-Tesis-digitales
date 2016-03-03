@extends('layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col s12">
				<h3 class="center roboto200">Bienvenido al Panel administrativo</h3>
				<p class="card-panel yellow">Hay {{ $tesis->total() }} tesis sin verificar.</p>

				<!-- inicio acordeón -->
				
				<ul class="collapsible popout" data-collapsible="accordion">

					@foreach($tesis as $t)
	
					<li>
						<div class="collapsible-header blue-grey lighten-5 truncate">
							<i class="icon-menu"></i>
							{{ $t->title }}
						</div>
						<div class="collapsible-body">
							<p>
								<strong>Título: </strong>
								{{ $t->title }}
								<br><br>
								<strong>Línea de investigación: </strong>
								{{ $t->line }}
								<br><br>
								<strong>Autor: </strong>
								{{ $t->author }}
								<br><br>
								<strong>Año de Sustentación: </strong>
								{{ $t->year }}
							</p>
							<div style="padding-bottom: 20px !important;" class="col s12 m4 center-align">
								<a href="{{ $t->dir }}" target="_black" class="waves-effect waves-light btn">Ver</a>
							</div>
							<div style="padding-bottom: 20px !important;" class="col s6 m4 center-align">
								
								{!! Form::open(['route'=>['tesis.update', $t], 'method'=>'PUT']) !!}

									<button type="submit" class="waves-effect waves-light btn green">APROBAR</button>

								{!! Form::close() !!}

							</div>
							<div style="padding-bottom: 20px !important;" class="col s6 m4 center-align">
								
								{!! Form::open(['route'=>['tesis.destroy', $t], 'method'=>'DELETE']) !!}

									<button type="submit" class="waves-effect waves-light btn red">BORRAR</button>
								
								{!! Form::close() !!}

							</div>
						</div>
					</li>

					@endforeach

				</ul>
				
				

				<!-- fin acordeón -->

			</div>
			<div class="col s12 center-align">
				{!! $tesis->render() !!}
			</div>
		</div>
	</div>

@endsection
