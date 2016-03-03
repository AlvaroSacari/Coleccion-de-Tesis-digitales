@extends('invitado-layout')

@section('content')
	
	<div class="container">
		<div class="row card-panel">
			<div class="col s12 center-align">
				<h4 class="roboto200">Publicar tesis</h4>
				<p>¡Comparta su Tesis con todo el mundo!</p>
			</div>
			<div class="col s12">

				{!! Form::open(['route'=>'tesis.store', 'files'=>'true', 'method'=>'POST']) !!}
					
            		<div class="col s12">
		                <div class="input-field">
		                	{!! Form::file('file') !!}
		                </div>
            		</div>

            		<div class="col s12">
		                <div class="input-field">
		                	{!! Form::text('title', null, ['class'=>'validate', 'id'=>'inputTitulo']) !!}
		                    <label for="inputTitulo">Título de la tesis</label>
		                </div>
            		</div>
					<div class="col s12">
						<div class="input-field">
							{!! Form::select('line', config('options.lines'), null, ['class'=>'']) !!}
						</div>
					</div>
        			<div class="col s12">
		                <div class="input-field">
		                	{!! Form::text('author', null, ['class'=>'validate', 'id'=>'inputAutor']) !!}
		                    <label for="inputAutor">Autor</label>
		                </div>
            		</div>
        			<div class="col s12">
		                <div class="input-field">
		                	{!! Form::email('email', null, ['class'=>'validate', 'id'=>'inputEmail']) !!}
		                    <label for="inputEmail">Correo electrónico</label>
		                </div>
        			</div>
        			<div class="col s12">
        				<div class="input-field">
        					{!! Form::text('year', null, ['class'=>'validate', 'id'=>'inputRealizacion']) !!}
		                    <label for="inputRealizacion">Año de realización</label>
		                </div>
        			</div>
					<div class="col s12 center-align">
						<button type="submit" class="waves-effect waves-light btn" style="z-index: 0 !important;">
							<i class="mdi-file-file-upload right"></i>
							PUBLICAR TESIS
						</button>
					</div>
        		{!! Form::close() !!}

			</div>
		</div>
	</div>

@stop
