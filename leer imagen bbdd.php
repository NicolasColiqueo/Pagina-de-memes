<!DOCTYPE html>
<html>
<head>
	<title>asd</title>
</head>
<body>

<?php
	$conexion = mysqli_connect("localhost","root","","memes"); //conecta con la base de datos

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
<div>


</div>
</body>
</html>