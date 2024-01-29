<?php 
require '../conexion.php';
$query=mysqli_query($mysqli,"SELECT p.id,p.name,p.image,p.price FROM productos p;");
$docu="productos.xls";
header('Content-type: application/vnd.ms-excel');
header('Content-disposition:attachment; filename='.$docu);
header('Pragma: no-cache');
header('Expires:0');
echo'<table border=1>';
echo '<tr>';
echo '<th colspan=4> Reporte de Producto</th>';
echo '</tr>';

echo'<tr><th>id</th><th>Nombre</th><th>img</th><th>precio</th></tr>';
while($row=mysqli_fetch_array($query)){
    echo'<tr>';
    echo '<td>'.$row['id'].'</td>';
    echo '<td>'.$row['name'].'</td>';
    echo '<td>'.$row['image'].'</td>';
    echo '<td>'.$row['price'].'</td>';
   
echo '</tr>';
}

echo'</table>';
?>