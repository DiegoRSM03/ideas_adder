<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<link rel="stylesheet" href="{{ asset('css/app.css') }}">

	<title>Ideas App</title>
</head>
<body>
	<header>
		<h1>IdeasApp</h1>
		<p>
			Diego Rodrigo Sanchez Moreno
			<br>
			Trabajo de prueba con VUE y LARAVEL
		</p>
	</header>
	<div id="app">
		<ideas></ideas>
	</div>

	<script src=" {{ asset('js/app.js') }} "></script>
</body>
</html>