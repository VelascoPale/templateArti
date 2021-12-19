<?php get_header(); ?>
<main>
		<h1 style="font-size:7vw;text-align:center; margin-top: 10%;">Menú de selección</h1>
		
		<div class="containerDos">
			<div class="boxDos" id="pec">
				<div class="contentDos">
					<h2>Oferta Educativa</h2>
					<h3>Paraescolares</h3>
					<a href="paraescolares">Seguir Leyendo</a>
				</div>
			</div>

			

			<div class="boxDos" id="cap">
				<div class="contentDos">
					<h2>Oferta Educativa</h2>
					<h3>Capacitaciones</h3>
					<a href="capacitaciones">Seguir Leyendo</a>
				</div>
			</div>
		</div>
			<h1 style="font-size:5vw;text-align:center; margin-top: 3%;margin-bottom: 3%;"> Mapa curricular</h1>

				<a href="<?php echo get_template_directory_uri(); ?>/"> <img src="<?php echo get_template_directory_uri(); ?>/img/mapa curricular.png" alt="mapa curricular"  style=" width:60%; margin: 0 20%;margin-bottom: 8%;"> </a>
		
	

	</main>

<?php get_footer (); ?>