
<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Enfermeria-Clientes</title>
	
	<link rel="stylesheet" href={{asset("css/animate.css")}}>
	<link rel="stylesheet" href={{asset("css/icomoon.css")}}>
	<link rel="stylesheet" href={{asset("css/themify-icons.css")}}>
	<link rel="stylesheet" href={{asset("css/bootstrap.css")}}>
	<link rel="stylesheet" href={{asset("css/magnific-popup.css")}}>
	<link rel="stylesheet" href={{asset("css/bootstrap-datepicker.min.css")}}>
	<link rel="stylesheet" href={{asset("css/owl.carousel.min.css")}}>
	<link rel="stylesheet" href={{asset("css/owl.theme.default.min.css")}}>
	<link rel="stylesheet" href={{asset("css/style.css")}}>
	<script src={{asset("js/modernizr-2.6.2.min.js")}}></script>


	</head>
	<body>
		
	<div class="gtco-loader"></div>
	
	<div id="page">

	
	<nav class="gtco-nav" role="navigation">
		<div class="gtco-container">
			
			<div class="row">
				<div class="col-sm-4 col-xs-12">
					<div id="gtco-logo"><a href="index.html">ENFERMERIA <em>MARLEN</em></a></div>
				</div>
				<div class="col-xs-8 text-right menu-1">
					<ul>
						
						<li><a href="{{route('inicioPersonal')}}"><font color="black">Ingreso Personal</font></a></li>
					</ul>	
				</div>
			</div>
			
		</div>
	</nav>
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{asset('images/img_bg_2.jpg')}})">
		<div class="overlay"></div>											
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					

					<div class="row row-mt-10em">
						<div class="col-md-12 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1><center>BIENVENIDO AL SISTEMA DE ENFERMERIA MARLEN<BR> Ayudanos a preservar tu salud</BR></h1>	
						</div>
					</div>
<center>
	<a href="{{route('reservarClient')}}">>
					<button class="btn btn-info"><font size="4">RESERVAS</font><br><br><img src={{asset("images/reserva.png")}} width="150"></button>
	</a>
	<a href="{{route('catalogo')}}">				
					<button class="btn btn-info"><font size="4">PRECIOS</font><br><br><img src={{asset("images/precio.png")}} width="150"></button>
	</a>
				
</center>							
					
				</div>
			</div>
		</div>
	</header>


	<footer id="gtco-footer" role="contentinfo">
		<div class="gtco-container">

			<div class="row copyright">
				<div class="col-md-12">
					
					
				</div>
			</div>

		</div>
	</footer>


	</div>

	<div class="gototop js-top">
		<a href="#" class="js-gotop"><i class="icon-arrow-up"></i></a>
	</div>
	

	<script src={{asset("js/jquery.min.js")}}></script>
	<script src={{asset("js/jquery.easing.1.3.js")}}></script>
	<script src={{asset("js/bootstrap.min.js")}}></script>
	<script src={{asset("js/jquery.waypoints.min.js")}}></script>
	<script src={{asset("js/owl.carousel.min.js")}}></script>
	<script src={{asset("js/jquery.countTo.js")}}></script>
	<script src={{asset("js/jquery.stellar.min.js")}}></script>
	<script src={{asset("js/jquery.magnific-popup.min.js")}}></script>
	<script src={{asset("js/magnific-popup-options.js")}}></script>
	<script src={{asset("js/bootstrap-datepicker.min.js")}}></script>
	<script src={{asset("js/main.js")}}></script>

	</body>
</html>