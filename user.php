<?php
 $db = mysqli_connect("localhost","root","", 'memes');

   if(!$db) echo "Error en conexion";

  $db->set_charset("utf8");

  $respuesta = mysqli_query($db, "SELECT  id_usuario, nombre_usuario,correo_electronico,iden_admin
FROM usuario ");



  echo "<table border='1'>";
  echo "<tr><td>ID</td> <td>NOMBRE</td> <td>CORREO</td> <td>ADMIN</td>";

  while($fila = mysqli_fetch_object($respuesta)) {
       echo "<tr><td>$fila->id_usuario</td>
                <td>$fila->nombre_usuario</td>
               <td>$fila->correo_electronico</td>
               <td>$fila->iden_admin</td>";
  }
  echo "</table>";
echo"<form action='usuarios.php'>
      <input type='submit' value='Volver'>
    </from>";

?>
