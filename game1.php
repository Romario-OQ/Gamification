<?php
session_start();
?>

<!DOCTYPE html>
<html lang="es">
<head>
<title>Rompecabezas</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
	<meta charset="UTF-8">
	
	<link rel="stylesheet" href="css/main.css">
	<title>Verificar Login e Iniciar Sesion</title>
	
</head>
<body>


		<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>

	<svg width="600" height="600" id="entorno">
		<g id="fondo"><image xlink:href="recovery/ESPACIO.png" width="400" height="80" x="100" y="200"></g>
			<g class="padre" id="0"><image xlink:href="recovery/1.png" class="movil"></g>
			<g class="padre" id="1"><image xlink:href="recovery/2.png" class="movil"></g>
			<g class="padre" id="2"><image xlink:href="recovery/3.png" class="movil"></g>
			<g class="padre" id="3"><image xlink:href="recovery/4.png" class="movil"></g>
			<g class="padre" id="4"><image xlink:href="recovery/5.png" class="movil"></g>
			<g class="padre" id="5"><image xlink:href="recovery/6.png" class="movil"></g>
			<g class="padre" id="6"><image xlink:href="recovery/7.png" class="movil"></g>
			<g class="padre" id="7"><image xlink:href="recovery/8.png" class="movil"></g>
	</svg>
	<audio id="bien" src="media/bien.mp3"></audio>
	<script type="text/javascript" src="js/main.js"></script>
</body>
