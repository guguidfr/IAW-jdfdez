<?php
echo "||--- EXTRA 1 :) Aquí también podemos incluir código PHP.<hr />";
?>
<html>
	<head> 
		<title> Ej1. Código PHP embebido. </title>
	</head>
	<body>
		<h2>EJEMPLO1 DE CÓMO EMBEBER CÓDIGO PHP EN HTML. </h2>
		<h3>Primer caso: Líneas de script PHP junto con código HTML</h3>
		<p>Una forma de embeber sentencias de PHP dentro del código HTML es <br />
		incorporando el código directamente entre las líneas de HTML.</p>
		<?php
		echo "Ahora incluimos el código PHP entre las etiquetas HTML<br />
		que también pueden ser incluidas como parte de un texto.<br /> ";
		// Creamos una variable $nota a la que asignamos valor 8
		$nota = 8;
		// Si el valor de $nota es superior a 5 aparece el mensaje SUPERADO
		if ($nota >= 5)
		{
			echo "<br /><b></strong>Nota = $nota ---Test SUPERADO.---</b><br />"; 
		}
		// En caso contrario aparece el mensaje NO SUPERADO
		else{
			echo "<br />Nota = $nota ---Test NO SUPERADO.---<br />"; 
		}
		?>
		<p>Volvemos al código HTML.</p>
		<p>Este sería un primer modo de embeber código PHP entre etiquetas HTML.</p>
		<p>También es posible incluir código PHP fuera del código HTML como 
		se ha mostrado en las etiquetas EXTRA 1 y EXTRA 2.</p>
	</body>	
</html>
<?php
echo "<hr />||--- EXTRA 2 :) Aquí también podemos incluir código PHP."."<br>";
//echo '<a href="https://172.26.26.100">patata</a>';
?>