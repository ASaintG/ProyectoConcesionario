<?php
include "../conexion.php";
session_start();

if (!empty($_POST)) 
{    
    $alert='';
if (empty($_POST['nombre'])|| empty($_POST['img'])|| empty($_POST['precio'])) 
{
    $alert='<p class="msg_error"> Todos los campos son obligatorios.</p>';

}else{
       $id=$_POST['id'];
        $nombreu=$_POST['name'];
        $img=$_POST['image'];
        $price=($_POST['price']);
       
    


    $query=mysqli_query($mysqli," SELECT * FROM productos WHERE (name ='$nombreu' AND id !=$id)
                                                        OR (image = '$img' AND id !=$id)");
        $result=mysqli_fetch_array(($query));

               if($result>0){
                $alert='<p class="msg_error">el usuario ya existe,</p>';

            }else{
                if(empty($_POST['nombre']))
                {
                    $sql_update=mysqli_query($mysqli, "UPDATE productos SET name = $nombreu image = $img
                     price = $price WHERE productos.id = $id");
                }else{
                    $sql_update=mysqli_query($mysqli,"UPDATE productos
                    SET name ='$nombreu', image='$img',price='$price'
                    WHERE id= $id");
                }
                if($sql_update){
                    echo"<script> alert('Datos Actualizados');
                    location.href='http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php'
                    
                    </script>";
                }else{
                    echo"<script> alert('Fallo de actualizacion ');
                    location.href='http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php'
                    
                    </script>";
                }
            }

        }
    }


if (empty($_GET['id'])) {
    # code...

header('location:http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php');

}
$iduser=$_GET['id'];
$sql=mysqli_query($mysqli,"SELECT p.id,p.name,p.image,p.price
            FROM productos p WHERE id=$iduser;");
      $result_sql=mysqli_num_rows($sql);
      if($result_sql==0){
        header('location:http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php');
      }else{
        while($data=mysqli_fetch_array($sql)){
            $iduser     =       $data['id'];
            $nombre     =       $data['name'];
            $usuario    =       $data['image'];
            $direccion  =       $data['price'];
            
            
        }

      }      

?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Producto</title>
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
<h1> Actualizar Producto</h1>
<input id="id" name="id" required type="hidden"  placeholder="Ingrese su Id" value="<?php echo  $iduser ?>">
<input id="nombre" name="nombre" type="text" required placeholder="Ingrese Nombre Completo" value="<?php echo  $nombre?>">
<input id="img" name="img" required type="text" placeholder="Ingrese su usuario" value="<?php echo $usuario?>">
<input id="precio" name="precio" type="text" required placeholder="Direccion" value="<?php echo $direccion ?>">


<input type="submit" value="Registrar">
</select>

</form>
    </div>
</body>
</html>