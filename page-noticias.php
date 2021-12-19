<?php 
get_header(); 
	$args=  array(
		'post_type'=>'post',
		'post_status'=>'publish',
		'orderby'=>'post_date',
		'order'=>'DES',
		'tax_query' =>array(
			array(
				'taxonomy'=>'category',
				'field'=>'slug',
				'terms'=>'noticias',
			),
		),
	);
?>


<main>
		<div class="contenedorCont">
			<aside class="aside">
				<nav class="acceso">
					<ul>
						<h3>Descargas</h3><br>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/RESEÑA HISTÓRICA.pdf" target="_blank">
							<li> &#8226 Reseña histórica</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/Calendario.pdf" target="_blank">
							<li>&#8226 Calendario Escolar</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/ORGANIGRAMA.pdf" target="_blank">
							<li>&#8226 Organigrama</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/mcurricular.jpg" target="_blank">
							<li>&#8226 Mapa curricular</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/img/mapa prepa.jpg" target="_blank">
							<li>&#8226 Croquis escolar</li>
						</a>
						<a href="<?php echo get_template_directory_uri(); ?>/doc/REGLAMENTO INTERNO.pdf" target="_blank">
							<li>&#8226 Reglamento</li>
						</a>
					</ul>
				</nav>
				<nav class="descargas">
					<ul>

					</ul>
				</nav>
			</aside>

			<div class="contenido">
				
				<div id="avisos"></div>
				<h1 style="text-align:center;margin-top: 5%;font-size: 7vw;" > Noticias </h1>
				
				
				
				
				<?php
					$pquery=new WP_Query($args);
					if($pquery->have_posts()):
						while($pquery->have_posts()):
							$pquery->the_post();
				?>

				<article class="conImg">					
						<h2><?php the_title(); ?></h2>
						<?php the_content(); ?>
				</article>
					<?php
						endwhile;
						wp_reset_postdata();
						endif;
					?>
				</article>
					
		</div>
	</main>
	<?php get_footer (); ?>