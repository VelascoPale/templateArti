<?php get_header(); ?>

<?php 
$administracion = get_field('administracion');
$contabilidad = get_field('contabilidad');
$mecanicaDental= get_field('mecanica_dental');
$desarrolloComunitario = get_field('desarrollo_comunitario');
$dibujo = get_field('dibujo_arquitectonico');
$diseño = get_field('diseno_grafico');
$higiene = get_field('higiene_salud');
$informatica = get_field('informatica');
$laboratorio = get_field('laboratorio');
$turismo = get_field('turismo');

?>

<main>
		<div class="contenedorCont">

			<aside class="aside">

				<nav class="acceso">
					<ul>
						<h3> Categorías </h3><br>
						<a href="#administracion">
							<li> &#8226 Administración </li>
						</a>
						<a href="#contabilidad">
							<li> &#8226 Contabilidad </li>
						</a>
						<a href="#dental">
							<li> &#8226 Mecánica Dental</li>
						</a>
						<a href="#desarrollo">
							<li> &#8226 Desarrollo comunitario</li>
						</a>
						<a href="#dibujo">
							<li> &#8226 Dibujo arquitectónico</li>
						</a>
					</ul>

				</nav>

				<nav class="descargas">
					<ul>
						<a href="#diseño">
							<li>&#8226 Diseño gráfico</li>
						</a>
						<a href="#hys">
							<li>&#8226 Higiene y salud </li>
						</a>
						<a href="#tics">
							<li> &#8226 Informática</li>
						</a>
						<a href="#laboratorio">
							<li> &#8226 Laboratorio</li>
						</a>
						<a href="#turismo">
							<li> &#8226 Turismo</li>
						</a>
					</ul>
				</nav>

			</aside>

			<div class="contenido">
				<div id="administracion"></div>
				<article class="conImg">
					<h2><?php echo $administracion['titulo']; ?></h2>
					<img src="<?php echo $administracion['imagen']; ?>" alt="imagen" id="newImgM">
					<p><?php echo $administracion['contenido']; ?></p>
				</article>
				<div id="contabilidad"></div>
				<article class="conImg">
					<h2> <?php echo $contabilidad['titulo'];  ?></h2>
					<img src="<?php echo $contabilidad['imagen']; ?>" alt="imagen" id="newImgM">
					<p><?php echo $contabilidad['contenido']; ?></p>
				</article>

				<div id="dental"></div>
				<article class="conImg">
					<h2> <?php echo $mecanicaDental['titulo'];  ?> </h2>
					<img src="<?php echo $mecanicaDental['imagen'];  ?>" alt="imagen" id="newImgM">
					<p><?php echo $mecanicaDental['contenido']; ?></p>
				</article>

				<div id="desarrollo"></div>
				<article class="conImg">
					<h2><?php echo $desarrolloComunitario['titulo']; ?></h2>
					<img src="<?php echo $desarrolloComunitario['imagen']; ?>" alt="imagen" id="newImgM">
					<p><?php echo $desarrolloComunitario['contenido']; ?></p>
				</article>

				<div id="dibujo"></div>
				<article class="conImg">
					<h2> <?php echo $dibujo['titulo']; ?></h2>
					<img src="<?php echo $dibujo['imagen']; ?>" id="newImgM">
					<p><?php echo $dibujo['contenido']; ?></p>
				</article>

				<div id="diseño"></div>
				<article class="conImg">
					<h2> <?php echo $diseño['titulo']; ?></h2>
					<img src="<?php echo $diseño['imagen']; ?>" id="newImgM">
					<p><?php echo $diseño['contenido']; ?></p>
				</article>

				<div id="hys"></div>
				<article class="conImg">
					<h2><?php echo $higiene['titulo']; ?></h2>
					<img src="<?php echo $higiene['imagen']; ?>" id="newImgM">
					<p><?php echo $higiene['contenido']; ?></p>
				</article>

				<div id="tics"></div>
				<article class="conImg">
					<h2> <?php echo $informatica['titulo']; ?> </h2>
					<img src="<?php echo $informatica['imagen']; ?>" id="newImgM">
					<p><?php echo $informatica['contenido']; ?></p>
				</article>

				<div id="laboratorio"></div>
				<article class="conImg">
					<h2> <?php echo $laboratorio['titulo']; ?></h2>
					<img src="<?php echo $laboratorio['imagen']; ?>" alt="imagen" id="newImgM">
					<p><?php echo $laboratorio['contenido']; ?></p>
				</article>

				<div id="turismo"></div>
				<article class="conImg">
					<h2> <?php echo $turismo['titulo']; ?> </h2>
					<img src="<?php echo $turismo['imagen']; ?>" id="newImgM">
					<p><?php echo $turismo['contenido']; ?></p>
				</article>

			</div>
		</div>
	</main>

<?php get_footer (); ?>