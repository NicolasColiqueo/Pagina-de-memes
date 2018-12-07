<!DOCTYPE HTML>
<html lang="es">
<head>
	<title>NMG!!</title>
	<meta charset="UTF-8">
	<link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
	<header>
		NationalMemeGraphics/Universidad Catolica Temuco
	</header>
	<h1>
		<SPAN style="color:black">NATIONAL</SPAN><SPAN style="color:yellow">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN>
	</h1>
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
<?php
	$conexion = mysqli_connect("localhost","root","","memes");

	if (mysqli_connect_errno()) {
		echo "Fallo al conectar con BD";
		exit();
	}

	mysqli_set_charset($conexion,"utf8");

	//Recibir datos video

	$nombre_v=$_FILES['video']['name'];
	$tipo_v=$_FILES['video']['type'];
	$tamaño_v=$_FILES['video']['size'];
	//MIME
	if ($tipo_v=="video/mp4" || $tipo_v=="video/ogg" || $tipo_v=="video/webm") {
			$destino=$_SERVER['DOCUMENT_ROOT'].'/NMG/uploads/'; //Ruta de la carpeta destino en servidor xampp
			move_uploaded_file($_FILES['video']['tmp_name'],$destino.$nombre_v); //mover archivo desde directorio temporal a directorio escogido
			$consultasql= "INSERT INTO imageness VALUES ('','$nombre_v','$tipo_v','','','$destino')";
			$resultado=mysqli_query($conexion,$consultasql);
			if(mysqli_affected_rows($conexion)>0){
				echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>El video fue almacenado exitosamente.</div><br>";	
			}
			else{
				echo mysqli_connect_errno($conexion);
				echo "<br>";
				echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>No se pudo insertar el video</div><br>";
			}
		}
	else{
		echo "El archivo seleccionado no tiene formato de video.";	
	}

?>
</body>
</html>