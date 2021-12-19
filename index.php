<?php 
get_header(); 
?>

	<div class="saludo">
		<h1> ¡Bienvenida(o) a nuestra página! </h1>
		<h2> olitavp.photo </h2>
	</div>

<main>
		<div class="contenedorCont">
			<aside class="aside">
				<nav class="descargas">
					<ul>
						<h3>Descargas</h3><br>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/RESEÑA HISTÓRICA.pdf" target="_blank">
							<li> &#8226 Reseña histórica</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/CALENDARIO.pdf" target="_blank">
							<li>&#8226 Calendario Escolar</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/ORGANIGRAMA.pdf" target="_blank">
							<li>&#8226 Organigrama</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/MAPA CURRICULAR.pdf" target="_blank">
							<li>&#8226 Mapa curricular</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/mapa prepa.jpg" target="_blank">
							<li>&#8226 Croquis escolar</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/ACUERDO DE CONVIVENCIA.pdf" target="_blank">
							<li>&#8226 Acuerdo de convivencia</li>
						</a>
					</ul>
				</nav>
				<nav class="acceso">
					<ul>
						<h3>Categorías</h3><br>
						<a href="#quienes">
							<li>&#8226 ¿Quienes somos? </li>
						</a>

						<a href="#organizacion">
							<li>&#8226 Organización escolar </li>
						</a>
						
					</ul>
				</nav>
			</aside>

			<div class="contenido">
				<marquee direction="up" scrolldelay="300">
					<h3 style="font-weight:bold">Estimados visitantes:</h3> <br>
					<p>
						Es un privilegio contar con su interés por conocer e informarse acerca de
						la Escuela de Bachilleres “Artículo Tercero Constitucional Vespertina”
						que me honro en dirigir. La segunda preparatoria más antigua de la Atenas
						veracruzana, de Xalapa-Enríquez, Veracruz.
						<br>
						Esperamos que este medio facilite la efectividad de la comunicación con
						alumnos, padres de familia, trabajadores y autoridades educativas, y
						desde luego con todos aquellos que navegando en la red deseen conocernos.
						<br>
						Los invito a buscar en cada apartado de esta página, información que pueda
						ser de su interés: datos acerca de la fundación, ubicación,
						instalaciones, organigrama, oferta educativa, plan de estudios,
						calendarios, noticias, y más, mucho más.
						<br>
						Es así como les doy la bienvenida a este pedacito de nuestra amada escuela.
						Su servidor
						<br><br>
						César Carlos Ramo Muñoz <br>
						Director
					</p>
				</marquee>
				
				<div id="quienes"></div>
				<h1 style="text-align:center;margin-top: 5%;font-size: 7vw;" > ¿Quienes somos? </h1>
					<article class=" sinImg ">
						<h2> Nosotros </h2>
						<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Velit, laudantium dicta dolores iure mollitia qui porro odio illo quae molestiae recusandae ad id nam praesentium possimus eligendi, modi voluptate accusantium.</p>
						<h3> Visión</h3>
						<p>Ser un espacio fundamental para el proceso de enseñanza aprendizaje, donde se imparta educación media superior con criterios de excelencia, para la formación integral de bachilleres con base en la intervención pedagógica de docentes altamente calificados y competentes, la aplicación de métodos educativos innovadores, así como el uso pedagógico de instalaciones, contenidos y materiales educativos.</p>
						<h3> Misión </h3>
						<p>Formar ciudadanos responsables, con alta capacidad para contribuir al desarrollo de sus comunidades; a la consolidación de la vida democrática del país; a la mejor convivencia humana; al desarrollo sostenible y la formación de una conciencia mundial para el cuidado del ambiente; a la promoción de la equidad de género y el respeto a la diversidad; al avance científico y tecnológico; así como a la adopción del humanismo como base para comprender y solucionar los problemas sociales. </p>
						<h3> Valores institucionales</h3>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. At eum placeat, ratione aliquid doloribus eius dignissimos sit a nulla in dicta, iure vitae accusantium maxime suscipit reiciendis vero tempora explicabo!</p>
					</article>

				<div id="organizacion"></div>
				<h1 style="text-align:center;margin-top: 5%;font-size: 7vw;" > Organización escolar </h1>
					<article class=" sinImg ">
						<h2> Organigrama </h2>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/ORGANIGRAMA.pdf" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/organigrama.png" style=" width:60%; margin: 0 20%;"> </a>
						<h2> Croquis </h2>
						<a href="<?php echo get_template_directory_uri(); ?>/img/mapa prepa.jpg" target="_blank"> <img src="<?php echo get_template_directory_uri(); ?>/img/mapa prepa.jpg" style="width:60%; margin: 0 20%; "> </a>
					</article>

		</div>
	</main>

	<?php get_footer (); ?>