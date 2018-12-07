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
	$conexion = mysqli_connect("localhost","root","","memes"); //conecta con la base de datos

	if (mysqli_connect_errno()) {
		echo "Fallo al conectar con BD";
		exit();
	}

	mysqli_set_charset($conexion,"utf8");

	//Recibir datos archivo

	$nombre_i=$_FILES['archivo']['name'];
	$tipo_i=$_FILES['archivo']['type'];
	$tamaño_i=$_FILES['archivo']['size'];
	//MIME
	if ($tipo_i=="image/jpeg" || $tipo_i=="image/gif" || $tipo_i=="image/jpg" || $tipo_i=="image/png") {

			$destino=$_SERVER['DOCUMENT_ROOT'].'/NMG/uploads/'; //Ruta de la carpeta destino en servidor xampp
			move_uploaded_file($_FILES['archivo']['tmp_name'],$destino.$nombre_i); //mover archivo desde directorio temporal a directorio escogido
			$archivo_objetivo=fopen($destino . $nombre_i, "r");
			$contenido=fread($archivo_objetivo, $tamaño_i);
			$contenido=addslashes($contenido);
			fclose($archivo_objetivo); 
			$consultasql= "INSERT INTO imageness VALUES ('','$nombre_i','$tipo_i','$contenido','','$destino')";
			$resultado=mysqli_query($conexion,$consultasql);
			if(mysqli_affected_rows($conexion)>0){
				echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>La imagen fue almacenada exitosamente.</div><br>";
			}
			else{
				echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>No se pudo insertar la imagen</div><br>";
			}
		}
	else{
		echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>El archivo seleccionado no tiene formato de imagen.</div><br>";	
	}

?> 
</body>
</html>