<?php
session_start();
$connect = mysqli_connect("localhost", "root", "", "concesionario");
if(isset($_POST["add_to_cart"]))
{
if(isset($_SESSION["shopping_cart"]))
{
$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
if(!in_array($_GET["id"], $item_array_id))
{
$count = count($_SESSION["shopping_cart"]);
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][$count] = $item_array;
}
else
{
echo '<script>alert("El producto ya se encuentra agregado")</script>';
 
}
}
else
{
$item_array = array(
'item_id' => $_GET["id"],
'item_name' => $_POST["hidden_name"],
'item_price' => $_POST["hidden_price"],
'item_quantity' => $_POST["quantity"]
);
$_SESSION["shopping_cart"][0] = $item_array;
}
}
if(isset($_GET["action"]))
{
if($_GET["action"] == "delete")
{
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
if($values["item_id"] == $_GET["id"])
{
unset($_SESSION["shopping_cart"][$keys]);
echo '<script>alert("Producto eliminado")</script>';
/*Poner la pagina a la que retorna*/
echo '<script>window.location="Ford.php"</script>';
}
}
}
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Carros Ford</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script> 
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" /> 
    <link rel="stylesheet" href="estilos.css">
    <script src="animacion.js"></script>
 <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<div>
<nav>
  <div class="nav-movil">
    <a id="nav-boton" href="#!">
      <span></span>
    </a>
  </div>
  <ul class="nav-menu">
    <li><a href="http://localhost/concesionario_de_carros/">Inicio</a></li>
    <li><a href="/informacion">Información</a></li>
    <li>
      <a>Marcas</a>
      <ul class="nav-submenu">
        <li><a href="http://localhost/concesionario_de_carros/php/catalago/Honda.php">Honda</a></li>
        <li><a href="http://localhost/concesionario_de_carros/php/catalago/Hiunday.php">Hyundai</a></li>
        <li><a href="http://localhost/concesionario_de_carros/php/catalago/Toyota.php">TOYOTA</a></li>
        <li><a href="http://localhost/concesionario_de_carros/php/catalago/Ford.php">Ford</a></li>
      </ul>
    </li>
    <li><a href="/contacto">Contacto</a></li>
  </ul>
</nav>
</div>

<body>
<br>
<br>
<br>
<br>
<div class="container" style="width:800px;">
<h3 align="center">Elige tu modelo favorito de Ford</h3>
<br>
<?php
$query = "SELECT * FROM productos WHERE name LIKE '%Ford%' ORDER BY id ASC;";
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
{
?>
<div class="col-md-4">
<form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>?action=add&id=<?php echo $row["id"]; ?>">
<div class="thumbnail">
<img src="<?php echo $row["image"]; ?>" class="img-responsive" />
<div class="caption">
<h4 class="text-info text-center"><?php echo $row["name"]; ?></h4>
<h4 class="text-danger text-center">L <?php echo $row["price"]; ?></h4>
<input type="text" name="quantity" class="form-control" value="1" />
<p class='text-center'>
<input type="submit" name="add_to_cart" class="btn btn-success " value="Agregar al carro" /></p>
 
<input type="hidden" name="hidden_name" value="<?php echo $row["name"]; ?>" />
<input type="hidden" name="hidden_price" value="<?php echo $row["price"]; ?>" />
</div>
</div>
</form>
</div>
<?php
}
}
?>

<div style="clear:both"></div>
<h3>Detalle de la orden</h3>
<div class="table-responsive">
<table class="table table-bordered">
<tr>
<th width="40%">Descripción</th>
<th width="10%" class='text-center'>Cantidad</th>
<th width="20%" class='text-right'>Precio</th>
<th width="15%" class='text-right'>Total</th>
<th width="5%"></th>
</tr>
<?php
if(!empty($_SESSION["shopping_cart"]))
{
$subtotal = 0;
$total = 0;
foreach($_SESSION["shopping_cart"] as $keys => $values)
{
?>
<tr>
<td><?php echo $values["item_name"]; ?></td>
<td class='text-center'><?php echo $values["item_quantity"]; ?></td>
<td class='text-right'>L <?php echo $values["item_price"]; ?></td>
<td class='text-right'>L <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
<!--Poner la pagina a la que retorna-->
<td><a href="Ford.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span button type="button" class="btn btn-danger">Eliminar</button</span></a></td>
</tr>
<?php
$subtotal = $subtotal + ($values["item_quantity"] * $values["item_price"]);
$iva = $subtotal * 0.15;
$total = $subtotal + $iva;
}
?>
<tr>
<td colspan="3" align="right">IVA</td>
<td align="right">L <?php echo number_format($iva, 2); ?></td>
</tr>
<tr>
<td colspan="3" align="right">SubTotal</td>
<td align="right">L <?php echo number_format($subtotal, 2); ?></td>
<td></td>
</tr>
<tr>
<td colspan="3" align="right">Total</td>
<td align="right">L <?php echo number_format($total, 2); ?></td>
<td></td>
</tr>
<tr>
<td colspan="3" align="right"></td>   
    <td>
    <button type="button" class="btn btn-primary" onclick="datos_usuarios();">Procesar factura</button> 
    </td>
    </tr>
<?php
}
?></table>
</div>
</div>
<?php
function datos_usuarios(){
include "../conexion.php";
$insertar= "INSERT INTO `orden` (`id_factura`, `id_usuario`, `fecha_de_factura`, `id`, `cantidad`) 
VALUES ('1', 'id_usurio', '2021-12-12 16:11:26.000000', 'id', '$values[item_quantity]')";

$query= mysqli_query($connect ,$insertar);


if($query){


    echo"<script> alert('Registro Completado ');
    location.href=''
    
    </script>";
}

}
?>


<!-- Footer -->
<footer class="text-center text-lg-start bg-light text-muted" style="background-color: #94EAC8;">
  <!-- Section: Social media -->
  <section
    class="d-flex justify-content-center justify-content-lg-between p-4 border-bottom"
  >
    <!-- Left -->
    <div class="me-5 d-none d-lg-block">
      <span>Puedes encontranos en nuestras redes sociales:</span>
    </div>
    <!-- Left -->

    <!-- Right -->
    <div>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-facebook-f"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-twitter"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-google"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-instagram"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-linkedin"></i>
      </a>
      <a href="" class="me-4 text-reset">
        <i class="fab fa-github"></i>
      </a>
    </div>
    <!-- Right -->
  </section>
  <!-- Section: Social media -->

  <!-- Section: Links  -->
  <section class="">
    <div class="container text-center text-md-start mt-5">
      <!-- Grid row -->
      <div class="row mt-3">
        <!-- Grid column -->
        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
          <!-- Content -->
          <h6 class="text-uppercase fw-bold mb-4">
            <i class="fas fa-gem me-3"></i>Cars Express
          </h6>
          <p>
            Aqui encontras las mejores marcas en automoviles, 
            siempre a la vanguardia en la mejor tecnologia automotris.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Marcas
          </h6>
          <p>
            <a href="http://localhost/prograWeb2/Carrito_de_compra/Honda.php" class="text-reset">Honda</a>
          </p>
          <p>
            <a href="http://localhost/prograWeb2/Carrito_de_compra/Hiunday.php" class="text-reset">Hyundai</a>
          </p>
          <p>
            <a href="http://localhost/prograWeb2/Carrito_de_compra/Toyota.php" class="text-reset">Toyota</a>
          </p>
          <p>
            <a href="http://localhost/prograWeb2/Carrito_de_compra/Ford.php" class="text-reset">Ford</a>
          </p>
        </div>
        <!-- Grid column -->
        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            LINK
          </h6>
          <p>
            <a href="#!" class="text-reset">Facebook</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Instegram</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Twitter</a>
          </p>
          <p>
            <a href="#!" class="text-reset">Tictok</a>
          </p>
        </div>
        <!-- Grid column -->
        <!-- Grid column -->
        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
          <!-- Links -->
          <h6 class="text-uppercase fw-bold mb-4">
            Contacto
          </h6>
          <p><i class="fas fa-home me-3"></i> Honduras,  Cortes, SPS</p>
          <p>
            <i class="fas fa-envelope me-3"></i>
            carsexpress@gmail.com
          </p>
          <p><i class="fas fa-phone me-3"></i> + 504 234 57 88</p>
          <p><i class="fas fa-print me-3"></i> + 504 234 57 89</p>
        </div>
        <!-- Grid column -->
      </div>
      <!-- Grid row -->
    </div>
  </section>
  <!-- Section: Links  -->
  <footer class="text-center text-white fixed-bottom" style="background-color: #21081a;">
  <!-- Grid container -->
  <div class="container p-4"></div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2021 Copyright:
    <a class="text-reset fw-bold" href="https://carsexpress.com/">carsexpress.com</a>
  </div>
  <!-- Copyright -->
</footer>
<!-- Footer -->
</body>
</html> 