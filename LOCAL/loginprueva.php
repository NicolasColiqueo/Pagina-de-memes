<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
	<title>login</title>
</head>
<body >
    <h1 >Welcome to <SPAN style="color:green">NATIONAL</SPAN><SPAN style="color:#89962B">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1>
	<h2 align="center"> INGRESA TUS DATOS PARA INICIAR SESIÓN</h2>
		<form action="validarprueva.php" method="post">

		     <label for="caja1"><p>Usuario:</p></label> 
			<p><input  type="text" name="NOMBRE" id="caja1" placeholder="usuario" required></p>
		     <label for="caja2"><p>Contraseña:</p></label>
			<p><input  type="password" name="CONTRASENA" id="caja2" placeholder="contraseña" required></p>
		   <p><input type="submit" name="Aceptar" value="iniciar sesion"></p> 
			<br><br>
		</form>
    
<p>Si no tienes una cuenta prueba <a href="registro.php">CREAR UNA CUENTA</a> </p>
	 
<p>o puedes volver a la <a href="index.php">PAGINA PRINCIPAL</a> </p>

	
</body>
</html>