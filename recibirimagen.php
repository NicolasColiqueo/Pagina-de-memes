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
				echo "La imagen fue almacenada exitosamente.";
			}
			else{
				echo "No se pudo insertar la imagen";
			}
		}
	else{
		echo "El archivo seleccionado no tiene formato de imagen.";	
	}

?> 