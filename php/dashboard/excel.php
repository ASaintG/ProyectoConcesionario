<?php 
require '../conexion.php';
$query=mysqli_query($mysqli,"SELECT u.id_usurio,u.nombre_usurio,u.usuario,u.direccion,u.telefono,u.tipo_usuario FROM usuarios u;");
$docu="listausuarios.xls";
header('Content-type: application/vnd.ms-excel');
header('Content-disposition:attachment; filename='.$docu);
header('Pragma: no-cache');
header('Expires:0');
echo'<table border=1>';
echo '<tr>';
echo '<th colspan=6> Reporte de Usuarios</th>';
echo '</tr>';

echo'<tr><th>id</th><th>Nombre</th><th>usuario</th><th>direccion</th><th>telefono</th><th>Tipo De Usuario</th></tr>';
while($row=mysqli_fetch_array($query)){
    echo'<tr>';
    echo '<td>'.$row['id_usurio'].'</td>';
    echo '<td>'.$row['nombre_usurio'].'</td>';
    echo '<td>'.$row['usuario'].'</td>';
    echo '<td>'.$row['direccion'].'</td>';
    echo '<td>'.$row['telefono'].'</td>';
    echo '<td>'.$row['tipo_usuario'].'</td>';
echo '</tr>';
}

echo'</table>';
?>