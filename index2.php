<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>NMemeG!!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="arriba.js"></script>
</head>
<body align="center">
	<header>
		header 
	</header>
	<h1><SPAN style="color:green">NATIONAL</SPAN><SPAN style="color:#89962B">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1> 
	<nav>
		<ul id="nav">
			<a href="subirimagen.php">SUBIR IMAGENES</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">SUBIR VIDEOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">VER VIDEOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="#">VER IMAGENES</a>
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