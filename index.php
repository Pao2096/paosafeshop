<?php
include("php/conexion.php");
$con=conectar();

$nombre= $_POST["txtusuario"];
$pass = $_POST["txtpassword"];

$query = mysqli_query($con,"SELECT * FROM usuarios WHERE usuario = '".$nombre."' and password = '".$pass."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{
	header("Location: inicio.php");
	echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	//header("Location: index.php");
	echo "No ingreso"; 
	//echo "<script> alert('Error');window.location= 'login.html' </script>";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/estilos.css">
	<title>Login</title>
</head>
<body>
	<div class="contenedor_loader">
		<div class="loader">
		</div>
	</div>

	<div class="login-box">
		<img src="IMAGENES/icono.png" class="icono">
		<h1>INICIAR SESIÓN</h1>
		<form method="post" action="index.php">

		<label>Usuario:</label>
		<input type="text" name="txtusuario" placeholder="Usuario"/>

		<label>Password</label>
		<input type="password" name="txtpassword" placeholder="Contraseña"/>
		
		<input type="submit" value="INGRESAR"/>

		<a href="#">Restablecer contraseña</a><br>
		<a href="#">Crear una cuenta</a>
		</form>		
	</div>
	
	<script src="js/script.js"></script>
</body>
</html>