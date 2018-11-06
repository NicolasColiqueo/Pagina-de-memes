
<?php
//include("connect_db.php");

//$miconexion = new connect_db;


session_start();
	require("connect_db.php");

	$username=$_POST['NOMBRE'];
	$pass=$_POST['CONTRASEÑA'];


	//la variable  $mysqli viene de connect_db que lo traigo con el require("connect_db.php");
	$sql2=mysqli_query($mysqli,"SELECT * FROM login WHERE nombre_usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['ide_admind']){
			$_SESSION['id']=$f2['id'];
			$_SESSION['nombre_usuario']=$f2['nombre_usuario'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}
	}


	$sql=mysqli_query($mysqli,"SELECT * FROM login WHERE email='$username'");
	if($f=mysqli_fetch_assoc($sql)){
		if($pass==$f['contraseña_usuario']){
			$_SESSION['id']=$f['id'];
			$_SESSION['nombre_usuario']=$f['nombre_usuario'];

			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}

?>