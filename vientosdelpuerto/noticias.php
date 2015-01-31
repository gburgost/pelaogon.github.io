<?php
	include 'conexion.php';

	$datos = mysqli_query($conexion, "SELECT * FROM noticia ORDER BY id_noticia DESC");

?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Noticias</title>
	<meta name="viewport" content="width=device-width, maximum-scale=1">
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
	<section class="Timeline-main u-Container">
		<h1 class="Timeline-Titleh1 u-Titleh1">Noticias</h1>
		<ul class="Timeline-lineaTiempo">
			<?php

				while ($row = mysqli_fetch_array($datos)) {

					$fechareal = $row['fecha'];
					$ArrayFecha =explode('-', $fechareal);
	    			$date = $ArrayFecha[2] ."/".$ArrayFecha[1] ."/".($ArrayFecha[0]-2000);

					echo ("<li class='Timeline-item'>
							<div class='Timeline-date'>
								<span>".$date."</span>
							</div>
							<figure class='Timeline-containerImage'><img class='Timeline-image' src='".$row['icono']."' width='75' height='75'/>
							</figure>
							<div class='Timeline-text'>
								<h2 class='Timeline-title'>".$row['titulo']."</h2>
								<p class='Timeline-p'>
									".$row['texto']."
									<a class='Timeline-link' href='".$row['link']."' target='_blank'>Continuar leyendo...</a>
								</p>
							</div>
						</li>");
				}
			?>
			<!-- <li class="Timeline-item">
				<div class="Timeline-date">
					<span>27/01/13</span>
				</div>
				<figure class="Timeline-containerImage">
					<img class="Timeline-image" src="img/noticia1.jpg" alt="Isla de Pascua" width="75" height="75" />
				</figure>
				<div class="Timeline-text">
					<h2 class="Timeline-title">4° encuentro folclorico Chileno-Argentino.</h2>
					<p class="Timeline-p">El Cuarto Encuentro de Integración Folclórica Cultural Chileno – Argentino, se vivió este fin de semana en Caldera, en el marco de las actividades de la temporada estival que se desarrollan en el puerto.
					<a class="Timeline-link" href="http://www.chanarcillo.cl/articulos_ver.php?id=64294" target="_blank">Continuar Leyendo...</a>
					</p>
				</div>
			</li>
			<li class="Timeline-item">
				<div class="Timeline-date">
					<span>15/01/13</span>
				</div>
				<figure class="Timeline-containerImage">
					<img class="Timeline-image" src="img/noticia2.jpg" alt="Isla de Pascua" width="75" height="75" />
				</figure>
				<div class="Timeline-text">
					<h2 class="Timeline-title">SENDA, "Comienza campaña".</h2>
					<p class="Timeline-p">La plaza Condell de Caldera fue el escenario del lanzamiento de la campaña “Decide tu verano, sin drogas sin alcohol” en la Región de Atacama, que busca promover hábitos de vida saludable entre niños y adolescentes durante el período estival.
						<a class="Timeline-link" href="http://www.senda.gob.cl/senda-en-terreno/gran-lanzamiento-regional-de-campana-de-verano-del-senda-en-caldera/" target="_blank">Continuar Leyendo...</a>
					</p>
				</div>
			</li>
			<li class="Timeline-item"></li>
			<li class="Timeline-item"></li> -->
		</ul>


	</section>
	<footer class="Footer">
		<p class="Footer-description">
			<strong class="icon-code"></strong> by
			<a href="http://pelaogon.github.io" target="_blank"><strong>Pelaogon</strong></a>
		</p>
	</footer>
	<script src="js/jquery.min.js"></script>
	<script src="js/responsiveslides.min.js"></script>
	<script src="js/hammer.min.js"></script>

	<script>
	  $(function() {
	    $(".rslides").responsiveSlides();

	    if(window.matchMedia("(max-width:767px)").matches){
	    	var $buttonShowMenu = document.getElementById('showMenu');
			var $buttonHideMenu = document.getElementById('hideMenu');
			var $menu = document.getElementById('menu');

			var $body = document.querySelector('body');

			var body = new Hammer($body);

			var showMenu = function(){
				$buttonShowMenu.classList.remove('is-active');
				$buttonHideMenu.classList.add('is-active');
				$menu.classList.add('is-active');
			};

			var hideMenu = function(){
				$buttonHideMenu.classList.remove('is-active');
				$buttonShowMenu.classList.add('is-active');
				$menu.classList.remove('is-active');
			};

			$buttonShowMenu.addEventListener("click", showMenu);
			$buttonHideMenu.addEventListener("click", hideMenu);


			// body.on('panleft', showMenu);
			// body.on('panright', hideMenu);
	    }
	  });
	</script>
</body>
</html>
