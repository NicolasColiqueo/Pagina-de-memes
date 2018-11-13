<?php
	$conexion = mysqli_connect("localhost","root","","memes"); //conecta con la base de datos

	if (mysqli_connect_errno()) {
		echo "Fallo al conectar con BD";
		exit();
	}

	mysqli_set_charset($conexion,"utf8");

	//Recibir datos imagen

	$nombre_i=$_FILES['imagen']['name'];
	$tipo_i=$_FILES['imagen']['type'];
	$tamaño_i=$_FILES['imagen']['size'];
	
	if ($tipo_i=="image/jpeg" || $tipo_i=="image/jpg" || $tipo_i=="image/png") {

		if ($tamaño_i<=5000000) { //condicional para que el archivo no supere los 5mb
			$destino=$_SERVER['DOCUMENT_ROOT'].'/NMG/uploads/'; //Ruta de la carpeta destino en servidor xampp
			move_uploaded_file($_FILES['imagen']['tmp_name'],$destino.$nombre_i); //mover imagen desde directorio temporal a directorio escogido
			$consultasql= "INSERT INTO imagenes VALUES ('','$nombre_i','','$tipo_i','$destino','$tamaño_i')";
			$resultado=mysqli_query($conexion,$consultasql);
			echo "La imagen fue almacenada exitosamente.";
		}else{
			echo "El tamaño de la imagen excede los limites establecidos.";
		}
	}else{
		echo "El archivo seleccionado no tiene formato de imagen.";
	}

?> 