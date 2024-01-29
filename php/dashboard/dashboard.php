<?php

session_start();
if(isset($_SESSION['usuario'])){

    if($_SESSION['usuario']['tipo_usuario']!= "Admin"){
        header("location:http://localhost/concesionario_de_carros/");
    }

}else{
    header('location:http://localhost/concesionario_de_carros/');
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carss EXPRESS Dashboard</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.css">
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
    <main>
        <h1 class="titulos_graficos">Productos en stock</h1>
    <div class="productos_en_stock" >

    <canvas id="myChart"></canvas>
   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.3/Chart.min.js"></script>

<script>
const ctx = document.getElementById('myChart');
const myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        datasets: [{
        label:'productos',
        backgroundColor:['#623AE0','#45F0CA','#3493F7','#63F046',
        '#DFEDFA','#46F0C0','#F7DFAD','#FA69A0','#F7DFAD','#A6EDE9',
        '#E0B9A8','#F08B7A','#623AE0','#3493F7','#63F046',
        '#DFEDFA','#46F0C0','#F7DFAD','#FA69A0','#F7DFAD','#A6EDE9',
        '#E0B9A8','#F08B7A','#623AE0'],
        borderColor:['black'],
        borderWidth:1
            
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});
        
        let url='http://localhost/concesionario_de_carros/apirest_php/articulos.php'
        fetch(url)
        .then(response=>response.json())
        .then(datos=>mostrar(datos))
        .catch(error=>console.log(error))

        const mostrar=(productos)=>{
            productos.forEach(element => {
                myChart.data['labels'].push(element.name)
                myChart.data['datasets'][0].data.push(element.stock)
            });
            console.log(myChart)

        }
</script>

        </div>     

    <div class="usuario_compras">
    <canvas id="pastel"></canvas>
   
    </div>
<div class="carro_mas_vendido"></div>
</body>

</html>
