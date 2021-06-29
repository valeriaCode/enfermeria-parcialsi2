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

	
	
	
	<header id="gtco-header" class="gtco-cover gtco-cover-md" role="banner" style="background-image: url({{asset('images/insumo.jpg')}})">
		<div class="overlay"></div>											
		<div class="gtco-container">
			<div class="row">
				<div class="col-md-12 col-md-offset-0 text-left">
					<li><a href="{{route('volverLogin')}}"><font color="black">Menu</font></a></li>
					<li><a href="{{route('seeproduct')}}"><font color="black">Ver Insumos</font></a></li>
					</ul>

					
						<div class="col-md-4 col-md-push-1 animate-box" data-animate-effect="fadeInRight">
							<div class="form-wrap">
								<div class="tab">
									
									<div class="tab-content">
										<div class="tab-content-inner active" data-content="signup">
											<h3>Registra nuevo Insumo</h3>

											<form action="{{route('saveproduct')}}" method="POST" >
												@csrf
												<div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Nombre</label>
														<input type="text" name="nombre" id="fullname" class="form-control" required="">
													</div>
												</div>
                                                <div class="row form-group">
													<div class="col-md-12">
														<label for="fullname">Categoria</label>
														<input type="text" name="categoria" id="fullname" class="form-control" required="">
													</div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="fullname">Descripcion</label>
                                                            <input type="text" name="descripcion" id="fullname" class="form-control" required="">
                                                        </div>
                                                    </div>
                                                    <div class="row form-group">
                                                        <div class="col-md-12">
                                                            <label for="fullname">Precio</label>
                                                            <input type="text" name="precio" id="fullname" class="form-control" required="">
                                                        </div>
                                                    </div>
												

												<div class="row form-group">
													<div class="col-md-12">
														<input type="submit" class="btn btn-primary btn-block" value="Agregar">
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

