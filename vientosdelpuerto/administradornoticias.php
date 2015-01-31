<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Administrador de noticias</title>
	<meta name="viewport" content="width=device-width, maximum-scale=1">
	<link rel="stylesheet" href="estilo/bootstrap.css">
	<link rel="stylesheet" href="estilo/estilo.css">
</head>
<body>
	<header class="Header">
		<div class="u-Container">
			<figure class="Header-logo">
				<img class="Header-logoImage" width="150" src="img/logo.png" alt="Logo VDP">
			</figure>
			<button class="Header-button is-active icon-menu" id="showMenu"></button>
			<button class="Header-button icon-menu" id="hideMenu"></button>
			<nav class="MainMenu" id="menu">
				<ul class="MainMenu-list">
					<li class="MainMenu-item"><a class="MainMenu-link" href="index.html">Inicio</a></li>
					<li class="MainMenu-item"><a class="MainMenu-link" href="nosotros.html">Nosotros</a></li>
					<li class="MainMenu-item"><a class="MainMenu-link" href="noticias.php">Noticias</a></li>
					<li class="MainMenu-item"><a class="MainMenu-link" href="galeria.html">Galeria</a></li>
					<li class="MainMenu-item"><a class="MainMenu-link" href="contacto.html">Contacto</a></li>
				</ul>
			</nav>
		</div>
	</header>
	<section class="Administrador u-Container">
		<h2 class="u-Titleh1">Administrador de noticias</h2>
		<form id="adminform" class="Administrador-formulario" name="form" action="procesanoticia.php" enctype="multipart/form-data"  method="POST">
			<label class="Administrador-label" for="fecha">Fecha: </label>
			<input class="Administrador-input" type="date" name="fecha"/>
			<label class="Administrador-label" for="icono">Imagen de noticia: </label>
			<input class="Administrador-input" type="file" name="foto"/>
			<label class="Administrador-label" for="titulo">Titulo: </label>
			<input class="Administrador-input" type="text" name="titulo"/>
			<label class="Administrador-label" for="texto">Texto: </label>
			<textarea class="Administrador-textarea" name="texto" id="texto" name="texto"></textarea>
			<label class="Administrador-label" for="link">Link: </label>
			<input class="Administrador-input" type="url" name="url" />
			<div class="Administrador-contenedorButton">
				<button name="enviar" type="reset" class="Administrador-button btn btn-danger">Limpiar</button>
				<button name="enviar" type="submit" class="Administrador-button btn btn-success">Enviar</button>
			</div>
		</form>
	</section>
	<footer class="Footer">
		<p class="Footer-description">
			<strong class="icon-code"></strong> by
			<a href="http://pelaogon.github.io" target="_blank"><strong>Pelaogon</strong></a>
		</p>
	</footer>
</body>
</html>
