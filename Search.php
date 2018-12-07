<!DOCTYPE html>
<html>
<head>
    <title>Subir archivo</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" type="text/css" href="fonts.css">
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>
<body>
    <header>
        NationalMemeGraphics/Universidad Catolica Temuco
    </header>
    <h1><SPAN style="color:black">NATIONAL</SPAN><SPAN style="color:yellow">MEME</SPAN><SPAN style="color:yellow">GRAPHICS</SPAN></h1> 
    <nav>
        <ul id="nav">
            <a id="salto" href="subirimagen.php">SUBIR IMAGENES</a>
            <a id="salto" href="subirvideo.php">SUBIR VIDEOS</a>
            <a id="salto" href="indexVid2.php">VER VIDEOS</a>
            <a  href="index2.php">VER IMAGENES</a>
            <form name="buscador" action="Search.php ">
                <input type="text" name="Etiqueta">
                <button type="submit">Search</button>
            </form>
        </ul>
    </nav>
    <?php

        $tag=$_GET["Etiqueta"];
        echo "<div style='background-color:white;text-align:center;padding:1em;margin-left:9em;margin-right:27em;'>El resultado de la etiqueta $tag es el siguiente: </div><br>";
        $conexion= mysqli_connect('localhost','root',"",'memes') or die ("error al conectarse a la base de datos");
    
        $consulta="SELECT * FROM imageness WHERE Etiquetas_M LIKE '$tag' ";

        $respuesta=mysqli_query($conexion,$consulta);
        while($fila=mysqli_fetch_array($respuesta)){
                $contenido=$fila['Contenido_M'];
                $titulo=$fila['Titulo_M'];
                echo "<div style='background-color:white;text-align:left;padding:1em;margin-left:9em;margin-right:27em;'>$titulo</div><br>";
                echo "<img src='data:image/jpeg; base64," . base64_encode($contenido) . "' width='700' height='500'><br>";
            }
    ?>
</body>
</html>