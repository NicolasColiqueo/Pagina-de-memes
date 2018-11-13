<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>login</title>
    <h1 align="center">Welcome to <SPAN style="color:green">NATIONAL</SPAN><SPAN style="color:#89962B">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1>
	<h2 align="center"> INGRESA TUS DATOS PARA INICIAR SESIÓN</h2>
</head>
<body bgcolor="5C5F46" align="center">
		<form action="validar.php" method="post">

		     <label for="caja1"><p>Usuario:</p></label> 
			<p><input  type="text" name="NOMBRE" id="caja1" placeholder="usuario" required></p>
		     <label for="caja2"><p>Contraseña:</p></label>
			<p><input  type="password" name="CONTRASENA" id="caja2" placeholder="contraseña" required></p>
		   <p><input type="submit" name="Aceptar" value="iniciar sesion"></p> 
			<br><br>
		</form>
		<form action='registro.php'>
            <p>Si no tienes una cuenta prueba</p>
     <p><input type='submit' value='Crear Cuenta'></p> 
    </form> 
<form action='index.php'>
    <p> O puedes volver a la </p>
      <p><input type='submit' value='Pagina Principal'></p> 
</form>

	
</body>
</html>
?>