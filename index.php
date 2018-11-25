<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>NMG!!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
	<script src="http://code.jquery.com/jquery-latest.js"></script>
	<script src="arriba.js"></script>
</head>
<body>
	<header>
		header 
	</header>
	<h1><SPAN style="color:green">NATIONAL</SPAN><SPAN style="color:#89962B">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1> 
	<nav>
		<ul id="nav">
			<a href="login buenobueno/login.php">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="login buenobueno/registro.php">REGISTRO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="indexVid.php">VER VIDEOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="index.php">VER IMAGENES</a>
		</ul>
	</nav>
	<span class="ir-arriba icon-circle-up">ARRIBA</span>
	<section class="contenido">
		<?php
			$contenido="";
			$titulo="";
			$conexion = mysqli_connect("localhost","root","","memes");
			if (mysqli_connect_errno()) {
				echo "Fallo al conectar con BD";
				exit();
			}

			mysqli_set_charset($conexion,"utf8");

			$consult="SELECT * FROM imageness";
			$result=mysqli_query($conexion, $consult);
			while($fila=mysqli_fetch_array($result)){
				$contenido=$fila['Contenido_M'];
				$titulo=$fila['Titulo_M'];
				echo "<p style='text-align:left;padding-left:9em'>$titulo</p>";
				echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "' width='700' height='500'><br>";
			}
		?>
	</section>
</body>
</html>