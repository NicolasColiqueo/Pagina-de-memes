<!DOCTYPE html>
<html>
<head>
	<title>Subir video</title>
</head>
<body>
	<form action="recibirvideo.php" method="post" enctype="multipart/form-data">
		<table>
			<tr>
				<td>
					<label for="video">video:</label>
				</td>
				<td>
					<input type="file" name="video">
				</td>
			</tr>
			<tr>
				<td colspan="2">
					<input type="submit" name="Enviar video">
				</td>
			</tr>
		</table>		
	</form>
</body>
</html>