<?php
    function conectar(){
        $user="root";
        $pass="";
        $server="localhost";
        $db="paosafeshop";
        $con=mysql_connect($server,$user,$pass) or die ("Error al conectar la base de datos".mysql_error());
        mysql_select_sb();
    }

?>