<?php
    include("conexion.php");
    $con=conectar();

    $sql="SELECT * FROM producto";
    $query=mysqli_query($con,$sql);

    $row=mysqli_fetch_array($query);

?>