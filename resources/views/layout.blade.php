<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>@yield('title', 'Bibliteca de Tesis - ¡Bienvenido!')</title>

	<link type="text/css" rel="stylesheet" href="{{asset('css/materialize.css')}}"  media="screen,projection"/>
	<link type="text/css" rel="stylesheet" href="{{asset('css/main.css')}}"  media="screen,projection"/>
	
	<!-- Fontastic icons -->
	<link href="https://fontastic.s3.amazonaws.com/hR4ziGrh5JgvmBG5cJ7fhW/icons.css" rel="stylesheet">
	
	<link href='http://fonts.googleapis.com/css?family=Great+Vibes' rel='stylesheet' type='text/css'>

	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no"/>

</head>
<body>
	<div class="navbar-fixed">
		<nav class="light-blue">
			<div class="nav-wrapper">
				<a href="/" class="brand-logo">
					<img class="valign" src="{{asset('img/LOGOTESIS.svg')}}" alt="">
				</a>
				<a href="#" data-activates="dropdown1" class="button-collapse"><i class="mdi-navigation-menu"></i></a>
				
				@if (Auth::guest())

					<ul class="side-nav" id="dropdown1">
						<li><a href="http://www.facebook.com/sharer.php?u=http://tesis.app&t=ColecciónDeTesisESIS" target="_black"><i class="icon-facebook left"></i>Compartir</a></li>
					</ul>

					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="http://www.facebook.com/sharer.php?u=http://tesis.app&t=ColecciónDeTesisESIS" target="_black"><i class="icon-facebook left"></i>Compartir</a></li>
					</ul>

				@else
					
					<ul class="side-nav" id="dropdown1">
						<li><a href="home"><i class="mdi-action-settings left"></i>Administrador</a></li>
						<li><a href="{{ url('/auth/logout') }}"><i class="mdi-action-account-circle left"></i>Cerrar sesión</a></li>
					</ul>

					<ul id="nav-mobile" class="right hide-on-med-and-down">
						<li><a href="home"><i class="mdi-action-settings left"></i>Administrador</a></li>
						<li><a href="{{ url('/auth/logout') }}"><i class="mdi-action-account-circle left"></i>Cerrar cesión</a></li>

				@endif

			</div>
		</nav>
	</div>
	
	<br>
	@yield('content')

	<footer class="page-footer light-blue darken-1">
		<div class="container">
			<div class="row">
				<div class="col s12">
					<div class="row center-align">
                            <div class="col s6">
                                <img class="responsive-img valign" style="margin: 10px !important;" src="/img/logo-unjbg.png" alt="">
                            </div>
                            <div class="col s6">
                                <img class="responsive-img valign" style="margin: 10px !important;" src="/img/logo-ciis.png" alt="">
                            </div>
                            <div class="col s12">
                                <p class="grey-text text-lighten-4">UNIVERSIDAD NACIONAL JORGE BASADRE GROHMANN<br>
                                E.A.P. DE INGENIERÍA EN INFORMÁTICA Y SISTEMAS</p>
                                <p class="grey-text text-lighten-4">Ciudad Universitaria - Av. Miraflores S/N - Tacna, Perú<br>
                                (52) 58300 Anexo 2005</p>
                            </div>
                        </div>
				</div>
			</div>
		</div>
		<div class="footer-copyright">
		    <div class="container">
		        Diseñado por <a class="white-text hover-underline" href="http://www.facebook.com/alvaro.sacari" target="_black">Alvaro Sacari A.</a>
		    </div>
		</div>
	</footer>

<script type="text/javascript" src="{{asset('js/jquery-2.1.1.min.js')}}"></script>
<script type="text/javascript" src="{{asset('js/materialize.js')}}"></script>
<script>
	$( document ).ready(function(){
		$(".button-collapse").sideNav();
		$('.modal-trigger').leanModal();
		$('select').material_select();

		$('.collapsible').collapsible({
			accordion : true
			});
	});
</script>

</body>
</html>