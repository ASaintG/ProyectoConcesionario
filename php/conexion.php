<?php
$server="localhost";
$user="root";
$pass="";
$db="concesionario";
$mysqli= new mysqli($server,$user,$pass,$db);

if($mysqli->connect_errno){
    die("la conexion ha fallado ".$mysqli->connect_errno);
}
?>