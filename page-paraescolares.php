<?php get_header(); ?>

<?php 

$ajedrez= get_field('ajedrez.png');
$artes = get_field('artes_plasticas');
$basquetbol = get_field('basquetbol');
$danza = get_field('danza');
$futbol = get_field('futbol');
$voleibol = get_field('vol');

?>

<main>

		<div class="contenedorCont">
			<aside class="aside">
				<nav class="descargas">
					<ul>
						<a href="#danza">
							<li> &#8226 Danza</li>
						</a>
						<a href="#futbol">
							<li> &#8226 Futbol</li>
						</a>
						<a href="#voli">
							<li> &#8226 Voleibol</li>
						</a>
					</ul>
				</nav>
				<nav class="acceso">
					<ul>
						<h3>Categorías</h3><br>
						<a href="#ajedrez">
							<li>&#8226 Ajedrez</li>
						</a>
						<a href="#artesplasticas">
							<li>&#8226 Artes Plásticas</li>
						</a>
						<a href="#basquet">
							<li> &#8226 Basquetbol</li>
						</a>
					</ul>
				</nav>
			</aside>

			<div class="contenido">
				<div id="ajedrez"></div>
				<article class="conImg">
					<h2><?php echo $ajedrez['titulo'];?></h2>
					<img src="<?php echo $ajedrez['imagen'];?>" alt="imagen" id="newImgM">
					<p><?php echo $ajedrez['contenido'] ?></p>
				</article>

				<div id="artesplasticas"></div>
				<article class="conImg">
					<h2><?php echo $artes['titulo'];?></h2>
					<img src="<?php echo $artes['imagen'];?>" alt="imagen" id="newImgM">
					<p><?php echo $artes['contenido'] ?></p>
				</article>


				<div id="basquet"></div>
				<article class="conImg">
					<h2><?php echo $basquetbol['titulo'];?></h2>
					<img src="<?php echo $basquetbol['imagen'];?>" alt="imagen" id="newImgM">
					<p><?php echo $basquetbol['contenido'] ?></p>
				</article>

				<div id="danza"></div>
				<article class="conImg">
					<h2><?php echo $danza['titulo'];?></h2>
					<img src="<?php echo $danza['imagen'];?>" alt="imagen" id="newImgM">
					<p><?php echo $danza['contenido'] ?></p>
				</article>
				<div id="futbol"></div>
				<article class="conImg">
					<h2><?php echo $futbol['titulo'];?></h2>
					<img src="<?php echo $futbol['imagen'];?>" alt="imagen" id="newImgM">
					<p><?php echo $futbol['contenido'] ?></p>
				</article>
				<div id="voli"></div>
				<article class="conImg">
					<h2><?php echo $voleibol['titulo'];?></h2>
					<img src="<?php echo $voleibol['imagen'];?>" alt="imagen" id="newImgM">
					<p><?php echo $voleibol['contenido'] ?></p>
				</article>
			</div>
		</div>

	</main>

	<?php get_footer (); ?>