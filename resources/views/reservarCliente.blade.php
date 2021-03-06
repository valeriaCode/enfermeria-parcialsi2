<!DOCTYPE HTML>
<html>
	<head>
	
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
						
						<li><a href="{{route('volverLogin')}}"><font color="black">Salir</font></a></li>
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
					

					<div class="row row-mt-15em">
						<div class="col-md-7 mt-text animate-box" data-animate-effect="fadeInUp">
							<h1>Gracias por confiar en nosotros</h1>	
						</div>
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Reserva Aqui</h3>

											<form action="{{route('saveReserv')}}" method="POST" >
												@csrf
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Paciente</label>
														<input type="text" name="paciente" id="fullname" class="form-control" required="">
													</div>
												</div>
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Destino</label>
														<input type="text" name="destino" id="fullname" class="form-control" required="">
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="activities">Rango de edad</label>
														<select name="rango_edad" id="activities" class="form-control" required="">
															<option value="Ni??o">Ni??o(De 0-12 a??os)</option>
															<option value="Joven">Joven(De 13-23 a??os)</option>
                                                            <option value="Adulto mayor">Adulto(De 24-70 a??os)</option>
															<option value="Tercera edad">Tercera edad(Mayor de 70 a??os)</option>
                                                        
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Seleccione el Servicio</label>
														<select name="servicio" id="destination" class="form-control" required="">
															<option value="Sobre el Covid19">Sobre el Covid19</option>
															<option value="Servicio normal">Servicio normal</option>
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="destination">Paquete</label>
														<select name="paquete" id="destination" class="form-control" required="">
															<option value="PREVENCION">PREVENCION</option>
															<option value="SECUELA">SECUELA</option>
															<option value="CUIDADO DE EMERGENCIA">CUIDADO DE EMERGENCIA</option>
															<option value="CHEQUEO">CHEQUEO</option>
															<option value="INYECTAR">INYECTAR</option>
															<option value="CUIDADO DE ATENCION">CUIDADO DE ATENCION</option>
															
														</select>
													</div>
												</div>
												<div class="row form-group">
													<div class="col-md-12">
														<label for="date-start">Fecha de Reserva</label>
														<input type="text" name="fecha_Reserva" id="date-start" class="form-control" ">
													</div>
												</div>

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Reservar">
													</div>
												</div>
											</form>	
										</div>

										
									</div>
								</div>
							</div>
						</div>
					</div>
							
					
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

