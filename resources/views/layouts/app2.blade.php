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
					<a href="{{ url('/') }}"><img src="image/LogoConsultorio.png" alt="Consultorio Médico" width="600"></a>
				</div>				
			</div>
		</div>
	</header>
	
	<div class="login">
		@yield('content')
	</div>		