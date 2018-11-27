<?php

    $Tag=$_GET["Etiqueta"];    
echo $Tag;
    $database= mysqli_connect('localhost','root',"",'memes') or die ("error al conectarse a la base de datos");
    
    $consulta="SELECT * FROM imageness WHERE Etiquetas_M LIKE '$Tag' ";

    $respuesta=mysqli_query($database,$consulta);
    while($fila=mysqli_fetch_array($respuesta)){
                $contenido=$fila['Contenido_M'];
                $titulo=$fila['Titulo_M'];
                echo "<p style='text-align:left;padding-left:9em'>$titulo</p>";
                echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "' width='700' height='500'><br>";
            }



?>