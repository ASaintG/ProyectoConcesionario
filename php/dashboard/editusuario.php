<?php
include "../conexion.php";
session_start();

if (!empty($_POST)) 
{    
    $alert='';
if (empty($_POST['nombre'])|| empty($_POST['nombre_usuario'])|| empty($_POST['direccion'])|| empty($_POST['telefono'])) 
{
    $alert='<p class="msg_error"> Todos los campos son obligatorios.</p>';

}else{
       $idusuario=$_POST['id_usuario'];
        $nombreu=$_POST['nombre'];
        $usuari=$_POST['nombre_usuario'];
        $pass=md5($_POST['Pass_Usuario']);
        $direcc=$_POST['direccion'];
        $telefo=$_POST['telefono'];
    


    $query=mysqli_query($mysqli," SELECT * FROM usuarios WHERE (usuario ='$usuari' AND id_usurio !=$idusuario)
                                                        OR (telefono = '$telefo' AND id_usurio !=$idusuario)");
        $result=mysqli_fetch_array(($query));

               if($result>0){
                $alert='<p class="msg_error">el usuario ya existe,</p>';

            }else{
                if(empty($_POST['password']))
                {
                        $sql_update=mysqli_query($mysqli,"UPDATE usuarios
                                                            SET nombre_usurio ='$nombreu', usuario='$usuari',direccion='$direcc',
                                                            telefono='$telefo'
                                                            WHERE id_usurio= $idusuario");
                }else{
                    $sql_update=mysqli_query($mysqli,"UPDATE usuarios
                    SET nombre_usurio ='$nombreu', usuario='$usuari',password='$pass',direccion='$direcc',
                    telefono='$telefo'
                    WHERE id_usurio= $idusuario");
                }
                if($sql_update){
                    echo"<script> alert('Datos Actualizados');
                    location.href='http://localhost/concesionario_de_carros/php/dashboard/lista_usuarios.php'
                    
                    </script>";
                }else{
                    echo"<script> alert('Fallo de actualizacion ');
                    location.href='http://localhost/concesionario_de_carros/php/dashboard/lista_usuarios.php'
                    
                    </script>";
                }
            }

        }
    }


if (empty($_GET['id'])) {
    # code...

header('location:http://localhost/concesionario_de_carros/php/dashboard/lista_usuarios.php');

}
$iduser=$_GET['id'];
$sql=mysqli_query($mysqli,"SELECT u.id_usurio,u.nombre_usurio,u.usuario,u.direccion,u.telefono
            FROM usuarios u WHERE id_usurio=$iduser;");
      $result_sql=mysqli_num_rows($sql);
      if($result_sql==0){
        header('location:http://localhost/concesionario_de_carros/php/dashboard/lista_usuarios.php');
      }else{
        while($data=mysqli_fetch_array($sql)){
            $iduser     =       $data['id_usurio'];
            $nombre     =       $data['nombre_usurio'];
            $usuario    =       $data['usuario'];
            $direccion  =       $data['direccion'];
            $telefono       =   $data['telefono'];
            
        }

      }      

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Usuario</title>
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
            <li><a href="http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php">Editar Productos</a></li>
            <li><a href="#">Ventas Totales</a></li>
            <li><a href="#">Vista Usuario</a></li>
            <li><a href="../cerrarS.php">cerrar Sesion</a></li>
        </ul>
    </div>
    <div>
        
<form class="box_Registrar" action="" name="logout" method="POST">
<h1> Actualizar Usuario</h1>
<input id="id_usuario" name="id_usuario" required type="hidden"  placeholder="Ingrese su Id" value="<?php echo  $iduser ?>">
<input id="nombre" name="nombre" type="text" required placeholder="Ingrese Nombre Completo" value="<?php echo  $nombre?>">
<input id="nombre_usuario" name="nombre_usuario" required type="text" placeholder="Ingrese su usuario" value="<?php echo $usuario?>">
<input id="Pass_Usuario" name="Pass_Usuario"  type="password" placeholder="Ingrese su Password">
<input id="direccion" name="direccion" type="text" required placeholder="Direccion" value="<?php echo $direccion ?>">
<input id="telefono" name="telefono" type="text" required placeholder="Ingrese su telefono" value="<?php echo $telefono ?>">

<input type="submit" value="Registrar">
</select>

</form>
    </div>
</body>
</html>