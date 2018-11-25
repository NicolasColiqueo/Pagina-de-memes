<!DOCTYPE html>
<html>
<head>
	<title>Subir archivo</title>
</head>
<body>
	<form action="recibirimagen.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<label for="archivo">archivo:</label>
				</td>
				<td>
					<input type="file" name="archivo" size="20">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="Enviar archivo">
				</td>
			</tr>
		</table>		
	</form>
</body>
</html>