<?php
    function conectar(){
        $user="root";
        $pass="";
        $server="localhost";
        $db="paosafeshop";
        $con= mysqli_connect($server, $user, $pass, $db);
        if(!$con)
        {
            echo "<h3>No se ha podido conectar PHP - MySQL, verifique sus datos.</h3><hr><br>";
        }
        else
        {
            return $con;
        }
    }

?>