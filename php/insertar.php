<?php
include("conexion.php");
$con=conectar();

$nom_prod = $_POST['nom_prod'];
$des_prod = $_POST['desc_prod'];
$pre_prod = $_POST['pre_prod'];

$sql = "INSERT INTO producto VALUES('','$nom_prod','$des_prod',$pre_prod)";
$query = mysqli_query($con,$sql);

if ($query) {
    Header("location: ../producto.php");
}else{

}

?>