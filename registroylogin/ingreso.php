<?php
//Me conecto al motor de BD y selecciono la BD
$NOMBRE=$_POST['nombre_usuario'];
$CONTRASEÑA=$_POST['contraseña_usuario'];
$CORREO=$_POST['correo_electronico'];

 $db = mysqli_connect("localhost","root","", 'memes');

  if(!$db) echo "Error en conexion";

  $db->set_charset("utf8");

//Realizo la consulta SQL
  $resp = mysqli_query($db,
  "INSERT INTO usuario(nombre_usuario, contraseña_usuario, correo_electronico)
  VALUES ('".$NOMBRE."','".$CONTRASEÑA."','".$CORREO."')");
  if (!$resp) {
    echo '<script>alert("ERROR DE REGISTRO")</script> ';
    echo "<script>location.href='index.php'</script>";
  }
  else {
    echo '<script>alert("USUARIO REGISTRADO")</script> ';
      echo "<script>location.href='index2.php'</script>";

  }
?>
