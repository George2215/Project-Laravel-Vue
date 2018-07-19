<!DOCTYPE html>
<html lang="es">
<head>
	<meta name="description" content="Pagina Web que promueve el servicio de consultas medicas para toda la familia de manera particular">
 	<meta name="keywords" content="Consultorio, Medico, Medicina, Familia, Salud">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta charset="UTF-8">
	<title>ConsultorioMédicoDSL</title>
	<link rel="shortcut icon" href="image/consultorio.ico" />		
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600i,700" rel="stylesheet">	
	<link rel="stylesheet" href="{{ asset('css/app.css') }}">	
</head>
<body>	
	<header>
		<div class="container">
			<div class="row contenedor-logo-menu">
				<div class="logo col-xs-12 col-md-6">
					<a href="#"><img src="image/LogoConsultorio.png" alt="Consultorio Médico" width="600"></a>
				</div>
				<div class="menu col-xs-12 col-md-6">
					<a href="#" id="btn-acerca">Acerca de</a>
					<a href="#" id="btn-contacto">Contacto</a>
					@if (Route::has('login'))
						@auth										
	                		<a href="{{ url('/home') }}">Home</a>
	                	@else
	                   <a href="{{ route('login') }}">Login</a>
	                   <a href="{{ route('register') }}">Register</a>
	                   	@endauth             
            		@endif					
				</div>
			</div>

			<div class="row textos">
				<div class="col-md-12">
					<h2 class="titulo1">Consultorio Médico Familiar</h2>
					<h3 class="parrafo1">Sabemos que la salud y el bienestar de su familia es lo más importante, por eso te damos la bienvenida al <span>Consultorio Médico Familiar Dra. Diana Sofia Lasso Ruiz</span></h3>
					<div class="contenedor-btns">
						<a href="#">Salud</a>
						<a href="#">Agendar Cita</a>
					</div>
				</div>				
			</div>
		</div>
	</header>

	<section class="main">
		<div class="container">
			<div class="row">
					<div class="col-md-12">
						<div class="page-header">
							<h1 class="text-center">Salud</h1>
						</div>
					</div>

					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="thumbnail">
							<a href="#">
								<img src="image/experimento.jpg" alt="">
							</a>
							<div class="caption">
								<h3>Iphone</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p>
									<a href="#" class="btn btn-primary">Leer</a>									
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="thumbnail">
							<a href="#">
								<img src="image/1.jpg" alt="">
							</a>
							<div class="caption">
								<h3>Iphone</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p>
									<a href="#" class="btn btn-primary">Leer</a>							
								</p>
							</div>
						</div>
					</div>
					<div class="col-xs-12 col-sm-6 col-md-4">
						<div class="thumbnail">
							<a href="#">
								<img src="image/2.jpg" alt="">
							</a>
							<div class="caption">
								<h3>Iphone</h3>
								<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit.</p>
								<p>
									<a href="#" class="btn btn-primary">Leer</a>									
								</p>
							</div>
						</div>
					</div>
			</div>
		</div>		

		<section class="acerca-de" id="acerca-de">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="row imagen">
							<div class="col-xs-4 img">
								<img src="image/consulta.jpeg" alt="consulta medica">						
							</div>
							<div class="col-xs-8 texto">
								<h3 class="titulo">Acerca de</h3>
								<p class="parrafo azul">El Consultorio Médico Familiar ofrece a la Comunidad, el servicio de consulta externa para la atención inicial de enfermedades que no son urgencias y no comprometen la vida del paciente. 
								<br><br>
								La atención pretende como actividad fundamental vincular a los usuarios a las diferentes actividades de promoción de la salud y prevención de la enfermedad.							
								</p>
							</div>						
						</div>

						<div class="row imagen">
							<div class="col-xs-8 texto">
								<h3 class="titulo">Como solicitar su Cita</h3>
								<p class="parrafo azul">Las citas se asignan de manera telefónica llamando al numero (+56)942745216. De Lunes a Viernes desde las 8:00 a.m. hasta las 17:00 p.m. Se podrán asignar las citas tanto en la mañana como en la tarde, dependiendo de la disponibilidad de la agenda.
									<br><br>
								Los usuarios deben llegar 20 minutos antes de la hora asignada para realizar el proceso de admisión. Es importante llegar a tiempo a la hora de su cita para que pueda ser atendido. Solo podrá ingresar hasta 5 minutos después de su cita asignada, pasado este tiempo no podrá hacerlo sin autorización del médico.
								</p>
							</div>	
							<div class="col-xs-4 img">
								<img src="image/agenda.jpg" alt="consulta medica">						
							</div>											
						</div>
					</div>
				</div>
			</div>
		</section>		
	</section>

	<footer>
		<div class="contacto" id="contacto">
			<div class="container">
				<div class="row">
					<div class="col-md-12 contact">
						<h4 class="titulo">Contacto</h4>
						<p class="calle">364 Rancagua <br>Alameda Parque, Campos 11762</p>
						<p class="correo">correo [@] gmail.com</p>
					</div>
				</div>
			</div>
		</div>

		<div class="redes-sociales">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<a href="" class="twitter"><i class="fa fa-twitter" title="Twitter"></i></a>
						<a href="" class="facebook"><i class="fa fa-facebook" title="Facebook"></i></a>
						<a href="" class="instagram"><i class="fa fa-instagram" title="Instagram"></i></a>
					</div>
				</div>
			</div>
		</div>
	</footer>

	<script src="{{ asset('js/app.js') }}"></script>	
</body>
</html>