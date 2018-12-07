<?php
session_start();
$NOMBRE=$_POST['NOMBRE'];
$CONTRASEÑA=$_POST['CONTRASEÑA'];
$md5 = md5($CONTRASEÑA);
$CORREO=$_POST['CORREO'];

 $db = mysqli_connect("localhost","root","", 'memes');

  if(!$db) echo "Error en conexion";

  $db->set_charset("utf8");

  $resp = mysqli_query($db,"INSERT INTO usuario(nombre_usuario, contraseña_usuario, correo_electronico) VALUES ('".$NOMBRE."','".$md5."','".$CORREO."')");
  if (!$resp) {
    echo '<script>alert("ERROR DE REGISTRO")</script> ';
    echo "<script>location.href='ingreso.html'</script>";
  }
  else {
    echo '<script>alert("USUARIO REGISTRADO")</script> ';
      echo "<script>location.href='index2.php'</script>";

  }
?>
