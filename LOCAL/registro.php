
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> registro</title>
    <link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style3.css">
  
</head>
<body >
    <h1 align="center">Welcome to <span style="color:green">NATIONAL</SPAN><SPAN style="color:#89962B">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1>
  <h2>INGRESA TUS DATOS PARA REGISTRARTE</h2>
    
<form action="ingreso.php" method="post" align="center">
  <label for="caja1"><p>Nombre Usuario:</p></label>
  <p> <input type="text" name="NOMBRE" id="caja1" placeholder="usuario" required></p>
   <label for="caja2"><p>Contraseña:</p></label>
  <p> <input type="password" name="CONTRASENA" id="caja2" placeholder="Contraseña"  required></p>
  <label for="caja3"><p>Correo Electronico:</p></label>
  <p><input type="email" name="CORREO"  id="caja3" placeholder="Correo Electronico"required></p>
  
  <p><input type="submit" name="registrarse" value="REGISTRARSE"></p><br>
  </form>
    
    <p>si tienes una cuenta puedes <a href="login.php">INICIAR SESIÓN</a> </p> 

    <p>o puedes volver a la <a href="index.php"> PAGINA PRINCIPAL</a> </p>
    




</body>

</html>
