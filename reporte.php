
<!Doctype html>
    <?php
session_start();
?>
<html>
<head_>
<title>eliminar meme</title> 
   
    <link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head_>    
<body> 
<form action="deleteuser.php">
<SPAN style="color:yellow">ELIMINAR IMAGEN O VIDEO CON LA ID:</SPAN> <input type="text" name="id"  required>
<input type="submit" value="eliminar" ><br><br>
</form>
<form action='imgreport.php'>
      <input type='submit' value='MOSTRAR IMAGENES Y VIDEOS REPORTADAS'>
 </form>

 <form action='admin.php'>
      <input type='submit' value='Volver'>
 </form>
</body>
</html>