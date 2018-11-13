<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>NMemeG!!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="arriba.js"></script>
</head>
<body>
	<header>
		header 
	</header>
	<h1>NationalMemeGraphics</h1>
	<nav>
		<ul id="nav">
			<li><a href="subirimagen.php">subir meme</a></li>
			<li>subir video</li>
			<li>ver videos</li>
			<li>ver memes</li>
			<li>meme gen</li>
		</ul>
	</nav>
	<span class="ir-arriba icon-circle-up"> ARRIBA </span>
	<section class="contenido">
		<?php
			$conexion = mysqli_connect("localhost","root","","memes"); //conecta con la base de datoss
			if (mysqli_connect_errno()) {
				echo "Fallo al conectar con BD";
				exit();
			}

			mysqli_set_charset($conexion,"utf8");

			$consult="SELECT Titulo_M FROM imagenes";
			$result=mysqli_query($conexion, $consult);
			while($fila=mysqli_fetch_array($result)){
				$ruta_img = "/NMG/uploads/" . $fila["Titulo_M"];
				echo "<img src=" . $ruta_img . " width=700 height=500>";
			}
		?>
	</section>
</body>
</html>