@extends('layout')

@section('content')

<div class="container">
	<div class="row card-panel">
		<div class="col s12 m8 offset-m2 l6 offset-l3">
			<h4 class="center roboto200">Autentificación</h4>

			@if (count($errors) > 0)
				<p class="card-panel red lighten-3 center"><strong>Upss!</strong> Correo electrónico o contraseña incorrectos.</p>
			@endif

			<form class="" role="form" method="POST" action="{{ url('/auth/login') }}">
				<input type="hidden" name="_token" value="{{ csrf_token() }}">

				<div class="input-field">
					<input id="email" type="email" class="validate" name="email" value="{{ old('email') }}">
					<label for="email">Correo electrónico</label>
				</div>

				<div class="input-field">
					<input id="password" type="password" class="validate" name="password">
					<label for="password">Contraseña</label>
				</div>
				
				<p>
					<input type="checkbox" name="remember" id="remember" />
					<label for="remember">No cerrar sesión</label>
				</p>

				<div class="row center">
					<div class="col s12">
						<button class="btn waves-effect waves-light" type="submit" name="action">Ingresar
						    <i class="mdi-content-send right"></i>
						</button>
					</div>
 					<div class="col s12">
						<a class="waves-effect waves-teal btn-flat" href="{{ url('/password/email') }}">¿Olvidó su contraseña?</a>
 					</div>
				</div>
			</form>
		</div>
	</div>
</div>

@endsection
