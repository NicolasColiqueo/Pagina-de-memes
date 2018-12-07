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
	<form style="background-color: white;" action="recibirimagen.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<label for="archivo">archivo:</label>
				</td>
				<td>
					<input type="file" name="archivo">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="Enviar imagen">
				</td>
			</tr>
		</table>		
	</form>
</body>
</html>