
<!Doctype html>
    <?php
session_start();
?>
<html>
<head_>
<title>eliminar usuario</title> 
   
    <link rel="stylesheet" type="text/css" href="fonts.css">
	<link rel="stylesheet" type="text/css" href="style2.css">
</head_>    
<body> 
<form action="deleteuser.php">
<SPAN style="color:yellow">ELIMINAR USUARIO CON LA ID:</SPAN> <input type="text" name="id"  required>
<input type="submit" value="eliminar" ><br><br>
</form>
<form action='user.php'>
      <input type='submit' value='MOSTRAR USUARIOS'>
 </form>

 <form action='admin.php'>
      <input type='submit' value='Volver'>
 </form>
</body>
</html>