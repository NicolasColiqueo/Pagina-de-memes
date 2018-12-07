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
		NationalMemeGraphics/Universidad Catolica Temuco
	</header>
	<h1><SPAN style="color:black">NATIONAL</SPAN><SPAN style="color:yellow">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1> 
	<nav>
		<ul id="nav">
			<a id="salto" href="subirimagen.php">SUBIR IMAGENES</a>
			<a id="salto" href="subirvideo.php">SUBIR VIDEOS</a>
			<a id="salto" href="indexVid2.php">VER VIDEOS</a>
			<a  href="index2.php">VER IMAGENES</a>
			<form name="buscador" action="Search.php ">
				<input type="text" name="Etiqueta">
				<button type="submit">Search</button>
			</form>
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
			$tipo=$fila['Tipo_M'];
			$titulo=$fila['Titulo_M'];
			if($tipo="video/webm"){
				echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>$titulo</div><br>";
	            echo "<video controls width='700' height='500'>
    	    		<source src='/NMG/uploads/".$titulo."' width='500' height='500' type='video/webm'/>
					</video><br>";
			}
			else{
				if($tipo="video/mp4"){
					echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>$titulo</div><br>";
	            	echo "<video controls width='700' height='500'>
    	    			<source src='/NMG/uploads/".$titulo."' width='500' height='500' type='video/mp4'/>
						</video><br>";
				}
				else{
					if($tipo="video/ogg"){
						echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>$titulo</div><br>";
	    	        	echo "<video controls width='700' height='500'>
    		    			<source src='/NMG/uploads/".$titulo."' width='500' height='500' type='video/ogg'/>
							</video><br>";
					}
				}	
			}
		}
	?>
</section>
</body>
</html>