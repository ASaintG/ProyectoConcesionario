<?php
require 'conexion.php';

$id_usuario= $_POST['id_usuario'];
$nombre=$_POST['nombre'];
$usuario= $_POST['nombre_usuario'];
$pass= $_POST['Pass_Usuario'];
$direccion= $_POST['direccion'];
$telefono= $_POST['telefono'];
$tipo_usuarios= $_POST['tipo_usuarios'];


$insertar= "INSERT INTO usuarios VALUES ('$id_usuario','$nombre','$usuario','$pass','$direccion','$telefono','$tipo_usuarios')";
$query= mysqli_query($mysqli,$insertar);

if($query){

    echo"<script> alert('Registro Completado ');
    location.href='http://localhost/concesionario_de_carros/php/dashboard/lista_usuarios.php'
    
    </script>";

   


}
?>