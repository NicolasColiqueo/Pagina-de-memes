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
		
	</header>
	<h1><SPAN style="color:green">NATIONAL</SPAN><SPAN style="color:#89962B">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1> 
	<nav>
		<ul id="nav">
			<a href="login.php">LOGIN</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="registro.php">REGISTRO</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="indexVid.php">VER VIDEOS</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
			<a href="index.php">VER IMAGENES</a>
		</ul>
	</nav>
	<span class="ir-arriba icon-circle-up"> ARRIBA </span>
	<section class="contenido">
	<?php
		$conexion = mysqli_connect("localhost","root","","memes");
		if (mysqli_connect_errno()) {
			echo "Fallo al conectar con BD";
			exit();
		}
		mysqli_set_charset($conexion,"utf8");
		$consult="SELECT * FROM imageness WHERE Tipo_M='video/webm' OR Tipo_M='video/mp4' OR Tipo_M='video/ogg'";
		$result=mysqli_query($conexion, $consult);
		while($fila=mysqli_fetch_array($result)){
			$contenido=$fila['Contenido_M'];
			$tipo=$fila['Tipo_M'];
			$titulo=$fila['Titulo_M'];
			if($tipo="video/webm"){
				echo "$titulo<br>";
	            echo "<video controls width='500' height='500'>
    	    		<source src='data:video/webm; base64," . base64_encode($contenido) . " ' width='500' height='500' type='video/webm'/>
				</video><br>";
			}
			else{
				if($tipo="video/mp4"){
					echo "$titulo<br>";
	            	echo "<video controls width='500' height='500'>
    	    			<source src='data:video/mp4; base64," . base64_encode($contenido) . " ' width='500' height='500' type='video/mp4'/>
						</video><br>";
				}
				else{
					if($tipo="video/ogg"){
					echo "$titulo<br>";
	    	        echo "<video controls width='500' height='500'>
    		    		<source src='data:video/ogg; base64," . base64_encode($contenido) . " ' width='500' height='500' type='video/ogg'/>
						</video><br>";
					}
				}	
			}
		}
	?>
</section>
</body>
</html>