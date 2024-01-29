<?php
require 'conexion.php';
session_start();



$insertar= "INSERT INTO `orden` (`id_factura`, `id_usuario`, `fecha_de_factura`, `id`, `cantidad`) 
VALUES ('12541', '1', '2021-12-12 16:11:26.000000', '2', '5')";

$query= mysqli_query($mysqli,$insertar);


if($query){


    echo"<script> alert('Registro Completado ');
    location.href=''
    
    </script>";

   
   

}
?>