<?php
    function conectar(){
        $user="root";
        $pass="";
        $server="localhost";
        $db="paosafeshop";
        $con= mysql_connect($server,$user,$pass);
        mysql_select_sb(db,Scon);

        return $con;
    }

?>