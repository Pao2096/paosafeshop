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

<html>
<link rel="stylesheet" href="css/estilos.css">
<center>
<form method="post" action="index.php">
<table class="login">
<tr><td colspan="2" style="background-color:#33A8DB; padding-bottom:5px; padding-top:5px;">
<label>Login</label></td>
</tr>
<tr>
<td><label>Usuario</label></td>
</tr>
<tr><td><input type="text" name="txtusuario"/></td></tr>
<tr><td><label>Password</label></td></tr>
<tr><td><input type="password" name="txtpassword" /> </td></tr>
<tr><td><input type="submit" value="Ingresar" /> </td></tr>
</table>
</form>
</center>
</html>
