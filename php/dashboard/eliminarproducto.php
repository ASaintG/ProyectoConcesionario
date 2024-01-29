<?php 
  include "../conexion.php";
session_start();
if(!empty($_POST)){
$idproducto=$_POST['id_producto'];
$query_delete=mysqli_query($mysqli,"DELETE FROM usuarios WHERE id_usurio=$idusuario");
    if ($query_delete) {
        header("Location:http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php");
    }else{
        echo "error al eliminar";
    }


}
if(empty($_REQUEST['id'])){

    header("location:http://localhost/concesionario_de_carros/php/dashboard/lista_productos.php");   
}else{
  
    $idproducto=$_REQUEST['id'];
    $query=mysqli_query($mysqli,"SELECT p.name,p.price FROM productos p WHERE p.id=$idproducto;");
$result=mysqli_num_rows($query);
 
if($result>0){
        while($data= mysqli_fetch_array($query)){
            $nombre     =       $data['name'];
            $usuario    =       $data['price'];
        
             }



        }else{
            header("location:lista_productos.php");
        }   

    }


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Eliminar</title>
    <link rel="stylesheet" href="../../css/style.css">
    <link rel="stylesheet" href="../dashboard/dashboard.css">
</head>
<body class="eliminarbac">
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
    <div class="data_delete">
        <h3>Esta seguro de Eliminar este Usuario?</h3>
        <p>Nombre:<span> <?php echo $nombre;?></span></p>
        <p>usuario:<span> <?php echo $usuario ;?></span></p>
        
        <form method="POST" action="">
            <input type="hidden" name="id_producto" value="<?php echo $idproducto;  ?>">
            <a class="cancelar" href="lista_usuario.php">Cancelar</a>
            <input class="enviar" type="submit" value="Aceptar">
        </form>
    </div>
</body>
</html>