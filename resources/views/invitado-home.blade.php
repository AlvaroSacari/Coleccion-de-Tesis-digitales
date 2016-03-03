@extends('layout')

@section('content')
	
	<div class="container">
		<div class="row">
			<div class="col s12">
				<h3 class="center roboto200">Colección de Tesis - ESIS</h3>
				<br>
			</div>
			{{-- <div class="col s12">
				<p>donde se encuentra una amplia variedad de tesis en las diferentes líneas de investigación, con el propósito de que elijas el más adecuado a tus intereses personales y profesionales para tu titulación.</p><br>
			</div> --}}
			<div class="col s12 m6 center-align">
				<a href="/invitado/publicar" class="waves-effect waves-light btn"><i class="mdi-file-file-upload right"></i>Publicar Tesis</a>
			</div>
			<div class="col s12 m6 center-align">
				<a href="#modal-busqueda" class="waves-effect waves-light btn modal-trigger"><i class="mdi-action-search right"></i>Buscar</a>
			</div>

			<div class="col s12 acordeon-invitado">
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
							<div style="padding-bottom: 20px !important;" class="col s12 center-align">
								<a href="{{ $t->dir }}" target="_black" class="waves-effect waves-light btn">Ver</a>
							</div>
						</div>
					</li>

					@endforeach

				</ul>

				<div class="col s12 center-align">
					{!! $tesis->appends(Request::only(['titulo', 'linea']))->render() !!}
				</div>
			</div>
		</div>
	</div>

  <!-- Modal Structure -->
  <div id="modal-busqueda" class="modal">
	<div class="modal-content">
		<div class="row">
			<div class="col s12">
				<h4 class="center-align roboto200">Búsqueda</h4>
			</div>
		</div>

		<div class="row">
			<div class="col s12">
				{!! Form::model(Request::all(), ['route'=>'invitado.index',
								'method'=>'GET',
								'role'=>'search']) !!}
					<div class="input-field">
				        {!! Form::text('titulo', null, ['class'=>'validate', 'id'=>'palabras']) !!}
				        <label for="palabras">palabras en el título</label>
				    </div>
				    <div class="input-field">
				    	{!! Form::select('linea', config('options.lines'), null, ['class'=>'']) !!}
					</div>
					
					<div class="col s6 center-align">
						<button type="submit" class="waves-effect waves-light btn" style="z-index: 0 !important;">Buscar</button>
					</div>
					<div class="col s6 center-align">
						<a href="#!" style="z-index: 0 !important;" class=" modal-action modal-close waves-effect waves-green btn-flat right-align">Cerrar</a>
					</div>
				{!! Form::close() !!}
			</div>
		</div>

    </div>
  </div>

@stop
