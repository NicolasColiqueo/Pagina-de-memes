<?php
	$conexion = mysqli_connect("localhost","root","","memes"); //conecta con la base de datos

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
			$archivo_objetivo=fopen($destino.$nombre_v, "r");
			$contenido=fread($archivo_objetivo, $tamaño_v);
			$contenido=addslashes($contenido);
			fclose($archivo_objetivo); 
			$consultasql= "INSERT INTO imageness VALUES ('','$nombre_v','$tipo_v','$contenido','','$destino')";
			$resultado=mysqli_query($conexion,$consultasql);
			if(mysqli_affected_rows($conexion)>0){
				echo "El video fue almacenado exitosamente.";
			}
			else{
				echo "No se pudo insertar el video";
			}
		}
	else{
		echo "El archivo seleccionado no tiene formato de video.";	
	}

?> 