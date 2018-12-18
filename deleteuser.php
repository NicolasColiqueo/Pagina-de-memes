<?php
session_start();
$nro =$_POST['id'];
$conexion = mysqli_connect("localhost","root","","memes");
$consulta = "DELETE FROM usuario
WHERE $nro=id_usuario";

$respuesta = mysqli_query($conexion, $consulta);
if($respuesta){
echo "el usuario con la id  $nro  a sido eliminado
<form 'action=admin.php'>
      <input type='submit' value='Volver'>
    </from>";}
else{
echo "ERROR! id de usuario incorrecto
 <form action='usuarios.php'>
      <input type='submit' value='Volver'>
    </from>";}  
  
?>