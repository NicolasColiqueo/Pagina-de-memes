<?php
session_start();
$NOMBRE=$_POST['NOMBRE'];
$CONTRASENA=$_POST['CONTRASENA'];
$CORREO=$_POST['CORREO'];

 $db = mysqli_connect("localhost","root","","memes");

  if(!$db) echo "Error en conexion";

  $db->set_charset("utf8");

  $resp = mysqli_query($db,
  "INSERT INTO usuario(nombre_usuario, contrasena_usuario, correo_electronico)
  VALUES ('".$NOMBRE."','".$CONTRASENA."','".$CORREO."')");
  if (!$resp) {
    echo '<script>alert("ERROR DE REGISTRO")</script> ';
   
  }
  else {
    echo '<script>alert("USUARIO REGISTRADO")</script> ';
      echo "<script>location.href='index2.php'</script>";

  }
?>
