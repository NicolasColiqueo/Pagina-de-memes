<?php
session_start();
$nro =$_POST['id'];
$conexion = mysqli_connect("localhost","root","","memes");
$consulta = "DELETE FROM reporte
WHERE $nro=Id_Memes";

$respuesta = mysqli_query($conexion, $consulta);
if($respuesta){
echo "el meme con la id  $nro  a sido eliminado
<form 'action=admin.php'>
      <input type='submit' value='Volver'>
    </from>";}
else{
echo "ERROR! id de meme incorrecto
 <form action='reporte.php'>
      <input type='submit' value='Volver'>
    </from>";}  
  
?>