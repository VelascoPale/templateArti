<?php get_header(); ?>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<meta name="viewport" content="width=width-device, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/style/header.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/style/contenido.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/style/fonts.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/style/footer.css">
	<link rel="stylesheet" type="text/css" href="<?php  echo get_template_directory_uri(); ?>/style/galeria.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="<?php  echo get_template_directory_uri(); ?>/script/scriptCarga.js"></script>
	<script src="<?php  echo get_template_directory_uri(); ?>/script/fixNav.js"></script>
	<script src="<?php  echo get_template_directory_uri(); ?>/script/jquery-3.1.0.min.js"></script>
	<script src="<?php  echo get_template_directory_uri(); ?>/script/jquery.flexslider.js"></script>
	<script src="<?php  echo get_template_directory_uri(); ?>/script/main.js"></script>
	<title> Mi Articulo Vespertino | Galería </title>
	<link rel="icon" href="img/logoarti.png">
</head>
<main>

		<h1 id="tituloGal">Instalaciones escolares</h1>

		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/biblioDos.jpg" alt="">
					<section class="caption">
						<h2>Biblioteca</h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/computo.jpg" alt="">
					<section class="caption">
						<h2>Centro de Cómputo</h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/direccion.jpg" alt="">
					<section class="caption">
						<h2>Dirección escolar</h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/academico.jpg" alt="">
					<section class="caption">
						<h2> Centro académico </h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria//bañosUno.jpg" alt="">
					<section class="caption">
						<h2>Baños de primero</h2>
					</section>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/departamentoOrientacion.jpg" alt="">
					<section class="caption">
						<h2>Departamento de orientación educativa</h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/servicioMedico.jpg" alt="">
					<section class="caption">
						<h2>Servicio medico</h2>
					</section>
				</li>

				</li>

			</ul>
		</div>

		<h1 id="tituloGal"> Areas recreativas </h1>
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/areas.jpg" alt="">
					<section class="caption">
						<h2>Cancha voley</h2>
					</section>
				</li>

				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/basqueDos.jpg" alt="">
					<section class="caption">
						<h2>Cancha baloncesto</h2>
					</section>
				</li>

				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/campo.jpg" alt="">
					<section class="caption">
						<h2>Campo de fútbol</h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/cafe.jpg" alt="">
					<section class="caption">
						<h2>Cafetería</h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/basquetFem.jpg" alt="">
					<section class="caption">
						<h2>Baloncesto femenino</h2>
					</section>
				</li>
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/circulo de la amistad.jpg" alt="">
					<section class="caption">
						<h2>Círculo de la amistad</h2>
					</section>
				</li>
			</ul>
		</div>

		<h1 id="tituloGal">Salones </h1>
		<div class="flexslider">
			<ul class="slides">
				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/primerS.jpg" alt="">
					<section class="caption">
						<h2>Edificio de primeros/segundos</h2>
					</section>
				</li>

				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/cuartoS.jpg" alt="">
					<section class="caption">
						<h2>Edificio de terceros/cuartos </h2>
					</section>
				</li>

				<li>
					<img src="<?php echo get_template_directory_uri(); ?>/img/galeria/sextS.jpg" alt="">
					<section class="caption">
						<h2>Edificio de quintos/sextos</h2>
					</section>
				</li>

			</ul>
		</div>

	</main>
<?php get_footer (); ?>