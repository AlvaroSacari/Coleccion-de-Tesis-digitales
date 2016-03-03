@extends('layout')

@section('content')

	<div class="container">
		<div class="row">
			<div class="col s12 center-align card-panel">
				<h2 class="center-align chopinscript-font">¡Bienvenido!</h2>
				<br>
				<p>Ingresar como:</p>
				<br>
				<a href="/invitado" class="waves-effect waves-light btn"><i class="mdi-hardware-keyboard-alt right"></i>Invitado</a>
				<br><br>
				<a href="{{ url('/auth/login') }}" class="waves-effect waves-teal btn-flat underline">Administrador</a>
				<br><br>

			</div>
		</div>
	</div>	

@stop
