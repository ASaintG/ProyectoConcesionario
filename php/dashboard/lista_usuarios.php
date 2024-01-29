<?php
include "../conexion.php";
session_start();




?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lista de Usuarios</title>
    <link rel="stylesheet" href="../dashboard/dashboard.css">
</head>
<body>
<input type="checkbox" id="abrir-cerrar" name="abrir-cerrar" value="">
    <label for="abrir-cerrar">&#9776; <span class="abrir">Menu</span><span class="cerrar">Menu</span></label>
    <div id="sidebar" class="sidebar">
        <ul class="menu">
            <li> <h6>Bienvenido <?php echo $_SESSION['usuario']['nombre_usurio']?></h6></li>
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/dashboard.php">Inicio</a></li>
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/agregarUsuario.php">Agregar Un Nuevo Usuario</a></li>
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/lista_usuarios.php">Usuarios</a></li>
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php">Editar Productos</a></li>
            <li><a href="#">Ventas Totales</a></li>
            <li><a href="#">Vista Usuario</a></li>
            <li><a href="../cerrarS.php">cerrar Sesion</a></li>
        </ul>
    </div>

<table>
<div class="mostrar_lista">
    <h1> Lista de Usuarios</h1>
<tr>
    <th>Id</th>
    <th>Nombre</th>
    <th>Usuario</th>
    <th>Direccion</th>
    <th>telefono</th>
    <th>Rol</th>
    <th>acciones </th>
</tr>
<?php
$mostrar="SELECT u.id_usurio,u.nombre_usurio,u.usuario,u.direccion,u.telefono,u.tipo_usuario FROM usuarios u;";
$query = mysqli_query($mysqli,$mostrar);
$result=mysqli_num_rows($query);
if($result > 0){
    while($data=mysqli_fetch_array($query)){

        ?>



    <tr>
        <td><?php echo $data['id_usurio']?></td>
        <td><?php echo $data['nombre_usurio']?></td>
        <td><?php echo $data['usuario']?></td>
        <td><?php echo $data['direccion']?></td>
        <td><?php echo $data['telefono']?></td>
        <td><?php echo $data['tipo_usuario']?></td>
        <td>
            <a class="link_edit"href="editusuario.php?id=<?php echo $data['id_usurio']?>">Editar</a>
            <a class="link_delete"href="eliminar_usuario.php?id=<?php echo $data['id_usurio']?>">Eliminar</a>
            </td>
        </tr>
        <?php
      }
        }
        ?>

</table>



    </div>
    <a href="http://localhost/concesionario_de_carros/php/dashboard/excel.php" style="width: 150px; border-radius:5px; height:30px; color:#000;font-style: none;  background-color:chartreuse;
" type="submit">descargar</a>
</body>

</html>