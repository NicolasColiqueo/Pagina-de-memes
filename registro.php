
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title> registro</title>
  <h1 align="center">Welcome to <span style="color:green">NATIONAL</SPAN><SPAN style="color:#89962B">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1>
  <h2>INGRESA TUS DATOS PARA REGISTRARTE</h2>
</head>
<body  bgcolor="5C5F46" align="center"><br><br>
<form action="ingreso.php" method="post" align="center">
  <label for="caja1"><p>Nombre Usuario:</p></label>
  <p> <input type="text" name="NOMBRE" id="caja1" placeholder="usuario" required></p>
  <label for="caja2"><p>Contraseña:</p></label>
  <p> <input type="password" name="CONTRASEÑA" id="caja2" placeholder="Contraseña"  required></p>
  <label for="caja3"><p>Correo Electronico:</p></label>
  <p><input type="email" name="CORREO"  id="caja3" placeholder="Correo Electronico"required></p>
  
  <p><input type="submit" name="registrarse" value="registrarse"></p><br>
  </form>
  <form action='login.php'>
      <p>si tienes una cuenta puedes</p>
      <p><input type='submit' value='iniciar sesion'> </p> 
</form>
<form action='index.php'>
    <p>o puedes volver a la </p>
      <p><input type='submit' value='pagina principal'> </p> 
</form>




</body>

</html>
