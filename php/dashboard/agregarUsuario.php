<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../dashboard/dashboard.css">
</head>
<body class="Registrar">
<input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
    <label for="abrir-cerrar">&#9776; <span class="abrir">Menu</span><span class="cerrar">Menu</span></label>
    <div id="sidebar" class="sidebar">
        <ul class="menu">
            <li> <h6>Bienvenido <?php echo $_SESSION['usuario']['nombre_usurio']?></h6></li>
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/dashboard.php">Inicio</a></li>
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/agregarUsuario.php">Agregar Un Nuevo Usuario</a></li>
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/lista_usuarios.php">Usuarios</a></li>
            <li><a href="#">Editar Productos</a></li>
            <li><a href="#">Ventas Totales</a></li>
            <li><a href="#">Vista Usuario</a></li>
            <li><a href="../cerrarS.php">cerrar Sesion</a></li>
        </ul>
    </div>




    <div>
<form class="box_Registrar" action="../guardarregistro.php" name="logout" method="POST">
<h1> Registro</h1>
<input id="id_usuario" name="id_usuario" required type="text" placeholder="Ingrese su Id">
<input id="nombre" name="nombre" type="text" required placeholder="Ingrese Nombre Completo">
<input id="nombre_usuario" name="nombre_usuario" required type="text" placeholder="Ingrese su usuario">
<input id="Pass_Usuario" name="Pass_Usuario" required type="password" placeholder="Ingrese su Password">
<input id="direccion" name="direccion" type="text" required placeholder="Direccion">
<input id="telefono" name="telefono" type="text" required placeholder="Ingrese su telefono">
<select name="tipo_usuarios" id="tipo_usuarios">
    <option value="">tipo de usuario</option>
    <option value="Admin">Admin</option>
    <option value="Usuario">Usuario</option>
</select>
<input type="submit" value="Registrar">
</select>

</form>
    </div>
</body>
</html>