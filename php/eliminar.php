<?php
include("conexion.php");
$con=conectar();

$id_prod = $_GET['id_prod'];

$sql = "DELETE FROM producto WHERE id_prod = '$id_prod'";
$query = mysqli_query($con,$sql);

if ($query) {
    Header("location: ../producto.php");
}else{

}

?>