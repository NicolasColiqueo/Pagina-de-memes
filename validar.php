
<?php
session_start();
	require("conexion.php");

	$username=$_POST['NOMBRE'];
	$pass=$_POST['CONTRASENA'];

	$sql2=mysqli_query($conexion,"SELECT * FROM usuario WHERE nombre_usuario='$username'");
	if($f2=mysqli_fetch_assoc($sql2)){
		if($pass==$f2['iden_admin']){
			$_SESSION['id']=$f2['id_usuario'];
			$_SESSION['user']=$f2['nombre_usuario'];

			echo '<script>alert("BIENVENIDO ADMINISTRADOR")</script> ';
			echo "<script>location.href='admin.php'</script>";
		
		}else{
            if($pass==$f2['contrasena_usuario']){
			$_SESSION['id']=$f['id_usuario'];
			$_SESSION['user']=$f['nombre_usuario'];

			echo '<script>alert("BIENVENIDO "$username"")</script> ';
			echo "<script>location.href='index2.php'</script>";
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='login.php'</script>";
		}
            
        }
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='registro.php'</script>";	

	}

?>