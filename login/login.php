<?php
session_start();
if(isset($_SESSION['usuario'])){
    if($_SESSION['usuario']['tipo_usuario']== "Admin"){
        header('Location: http://localhost/concesionario_de_carros/php/dashboard/dashboard.php');
    }else if($_SESSION['usuario']['tipo_usuario']== "Usuario"){
        header('Location:http://localhost/concesionario_de_carros/');
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="../css/style.css">
</head>
<body class="login">
    
    <div>
        <form id="iniciar"class="box" action=""  >
<h1>Login</h1>
    <input type="text" name="usuariolg"  pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Usuario">
    <input type="password" name="passlg" pattern="[A-Za-z0-9_-]{1,15}" required placeholder="Password">
<input type="submit" id="registrar"name="" value="Ingresar">
    <a  class="Registrar" href="http://localhost/concesionario_de_carros/login/registrar.php">No Tienes Cuenta?</a>
    </form>
    </div>
    <script src="../js/jquery-3.6.0.min.js"></script>
    <script src="../js/main.js"></script>
</body>

</html>