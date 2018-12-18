
<!Doctype html>
    <?php
session_start();
?>
<html>
<head_>
<title>ver imagenes</title> 
   
    <link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head_>    
<body> 
 <form action='reporte.php'>
      <input type='submit' value='Volver'>
 </form>
    <?php
			$tipo_i="";
			$conexion = mysqli_connect("localhost","root","","memes");
			if (mysqli_connect_errno()) {
				echo "Fallo al conectar con BD";
				exit();
			}

			mysqli_set_charset($conexion,"utf8");

			$consult="SELECT * FROM imageness WHERE Tipo_M='image/jpeg' OR Tipo_M='image/jpg' OR Tipo_M='image/gif' OR Tipo_M='image/png'";
			$result=mysqli_query($conexion, $consult);
			while($fila=mysqli_fetch_array($result)){
				$titulo=$fila['Id_Memes'];
				echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>$titulo</div>";
				echo "<img src='/uploads/".$titulo."' width='200' height='150'>";
			}
		?>
</body>
</html>


