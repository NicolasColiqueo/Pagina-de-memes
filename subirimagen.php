<!DOCTYPE html>
<html>
<head>
	<title>Subir imagen</title>
</head>
<body>
	<form action="recibirimagen.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<label for="imagen">Imagen:</label>
				</td>
				<td>
					<input type="file" name="imagen" size="20">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="Enviar Imagen">
				</td>
			</tr>
		</table>		
	</form>
    <form action='index2.php'>
      <p><input type='submit' value='Pagina Principal'></p> 
</form>
</body>
</html>