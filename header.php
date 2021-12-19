<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
	<title>Escuela de Bachilleres Artículo Tercero <?php wp_title( '|', true, 'left'); ?> </title>
	<meta name="description" content="<?php bloginfo('description'); ?>">
	<meta charset="<?php bloginfo( 'charset' ); ?>" />
	<meta http-equiv="X-UA-Compatible" content="ie=edge" />
	<link rel="icon" href=	"<?php echo get_template_directory_uri(); ?>/img/logoarti.png">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<meta name="viewport" content="width=width-device, initial-scale=1.0">
	<?php wp_head(); ?>

</head>

<body>
	<div id="loadPage">
		<p> Artículo Tercero Constitucional Vespertina</p>
		<img src="<?php echo get_template_directory_uri(); ?>/img/logoarti.png" id="logoLoad">
	</div>

	<header>
		<div id="menuPC">
			<a href="inicio"> <img src="<?php echo get_template_directory_uri(); ?>/img/school.png" id="logo"> </a>
			<div id="backgroundNav" class="menu">
				<nav id="navMain">
						<?php 
							$defaults= array(
							'theme_location' => 'principal-menu',
							'container'		=> 'div',
							'container_id'=> 'navMain',
							'container_class'=> 'menu',
							'fallback_cb'     => 'wp_page_menu'
							);
							wp_nav_menu($defaults );
						?>
				</nav>
			</div>
			
			<div class="name" >
				<h2 > Escuela de Bachilleres </h2><br>
				<h2> "Artículo Tercero Constitucional Vespertina" </h2>
				<h2> Clave: 30EBH0077V </h2>
			</div>
			<a href=" https://www.sev.gob.mx/#!/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/gob.svg" id="gob"> </a>
			<a href="https://www.sev.gob.mx/#!/" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/sev.svg" id="sev"> </a>
		</div>

		<div id="menuTel">
			<div id="menuMovil" class="menu">
				<a href="inicio">
					<h3 id="tittleTel"> Mi Artículo Vespertino </h3>
				</a>
				<input type="checkbox" id="botonMovil">
				<label for="botonMovil" id="labelMovil"> <img src="<?php echo get_template_directory_uri(); ?>/img/iconMen.png" id="logMenu"> </label>

				<nav id="botoneraMovil">
					<ul>
						<a href="inicio">
							<li> Inicio </li>
						</a>
						<a href="noticias">
							<li> Noticias </li>
						</a>
						<a href="estudiantes">
							<li> Estudiantes </li>
						</a>
						<a href="oferta-educativa">
							<li> Oferta educativa </li>

						<a href="galeria">
							<li> Galería </li>
						</a>
					</ul>
				</nav>
			</div>
		</div>

	</header>
