<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $root?>/assets/css/style.css">
    <title>Sucursales | Le Mans</title>
</head>
<body>
<!-- NAVBAR -->
<?php include_once $root.'/php/templates/nav.php'; ?>
   
<section class="section-products">
    <div class="products-grid">
        <header class="b-1">
            <h1>Todos los productos</h1>
        </header>
        <div class="b-2">
            <form action="#" method="post">
                <input type="search" name="search" id="search" placeholder="Buscar">
            </form>
        </div>
        <div class="b-3">
            <h2>Categorias</h2>
        </div>
        <div class="b-4">
            <h3>Linea Blanca</h3>
            <h3>Decoración</h3>
            <h3>Iluminación</h3>
            <h3>Muebles</h3>
            <h3>Ropa</h3>
            <h3>Cristalería</h3>
            <h3>Gimnasio</h3>
            <h3>Juguetería</h3>
            <h3>Camping</h3>
            <h3>Generadores</h3>
            <h3>Motobombas</h3>
            <h3>Motores</h3>
            <h3>Dinamos</h3>
            <h3>Herramientas</h3>
        </div>
        <div class="b-5">
            <p>Filtros</p>
        </div>
        <div class="b-6">
            <p>Precio: más bajo a más alto</p>
            <p>Precio: más alto a más bajo</p>
            <p>Precio: más antiguo a más nuevo</p>
            <p>Precio: más nuevo a más antiguo</p>
        </div>
        <div class="b-7"> </div>
    </div>
</section>

</body>
</html>