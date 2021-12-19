<?php get_header(); ?>
<main>

		<div class="contenedorCont">
			<aside class="aside">

				<nav class="acceso">
					<center>
                        <ul>
                            <h3>Descargas</h3><br>
                            <a href="<?php echo get_template_directory_uri(); ?>/doc/inscripciones/Solicitud de ingreso.pdf" target="_blank">
                                <li>&#8226 Solicitud de inscripción</li>
                            </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/doc/inscripciones/Anexo solicitud de inscripcion.pdf" target="_blank">
                                <li>&#8226 Anexo solicitud de inscripción</li>
                            </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/doc/inscripciones/Operativo mochila.pdf" target="_blank">
                                <li> &#8226 Oficio operativo mochila</li>
                            </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/doc/inscripciones/Acuerdo de convivencia.pdf" target="_blank">
                                <li> &#8226 Acuerdo de convivencia escolar</li>
                            </a>
                            <a href="<?php echo get_template_directory_uri(); ?>/doc/inscripciones/Cedula de salud.pdf" target="_blank">
                                <li> &#8226 Cédula de salud</li>
                            </a>
                        </ul>
                    </center>
				</nav>
			</aside>

			<div class="contenido">
            <h1 style="font-size:7vw;text-align:center; margin-top: 5%;">Instrucciones</h1>
            <p style="font-size:2.8vw;width:65%;margin: 2% auto;text-align: center;">Selecciona la tarjeta que cumple con tus necesidades.</p>
            <div class="container">
			<div class="box" id="segundo">
				<div class="content">
					<h2>1</h2>
					<h3>Primer Semestre</h3>
					<a href="#cuarto">Seguir Leyendo</a>
				</div>
			</div>

			<div class="box" id="cuarto">
				<div class="content">
					<h2>2</h2>
					<h3>Tercer Y Quinto Semestre</h3>
					<a href="<?php echo get_template_directory_uri(); ?>/doc/inscripciones/REQUISITOS DE INSCRIPCION 3-5.pdf" target="_blank">Seguir Leyendo</a>
				</div>
			</div>

			<div class="box" id="sexto">
				<div class="content">
					<h2>3</h2>
					<h3>Reingreso Y Repetidores de 3 y 5</h3>
					<a href="<?php echo get_template_directory_uri(); ?>/doc/inscripciones/REQUISITOS DE INSCRIPCION NI, REIN, Y REP 3-5.pdf" target="_blank">Seguir Leyendo</a>
				</div>
			</div>
		</div>
			</div>
		</div>

	</main>

	<?php get_footer (); ?>