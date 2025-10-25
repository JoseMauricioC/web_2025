<?php
$con = new mysqli("localhost", "root", "","crud");

if($con->connect_error){
    die("conexion fallida ".$con->connect_error);
}

?>