  <?php

	$host = "sql112.260mb.net";
	$basededatos = "n260m_22800980_listas";
	$usuariodb = "n260m_22800980";
	$clavedb = "teamstro";

	$conexion = mysqli_connect($host,$usuariodb,$clavedb,$basededatos) 
		or die ("No se establecio la conexion");

?>