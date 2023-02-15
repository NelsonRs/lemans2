<?php $url = $_SERVER['DOCUMENT_ROOT']; 
require $url.'/admin/models/class.php';
require $url.'/admin/models/login/validation.php';

?>    
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Registro de Productos</title>
    <!-- <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.2/css/uikit.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.uikit.min.css">
   

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php $url?>/admin/assets/css/index.css">
    
</head>
<body>
<nav class="nav">
    <ul class="nav-ul">
      <li><img src="<?php $url?>/assets/svg/logo/le-mans/logo-le-mans-without-bg.svg"></li>
      <li><a href="#"><?= strtoupper($_SESSION['user']) ?></a><a href="<?php $url?>/admin/models/login/logout.php">Cerrar sesión</a><img src="" alt=""></li>
    </ul>
  </nav>
<section class="index-section-register">
        <h2>Registrar Producto</h2>
        <form action="/admin/models/query.php" method="post" enctype="multipart/form-data">
            <input class="input-register" placeholder="Nombre" type="text" name="name" required><br>
            <input class="input-register" placeholder="Precio" type="number" name="price" required><br>
            <input class="input-register" placeholder="Código" type="text" name="codigo" required><br>
            <select class="select-register" required name="category">
                <option value="" hidden>Selecciona una categoría</option>
                <?php selectAll('kind') ?>
            </select><br>   
            <input type="file" name="image" required><br>

            <h3>Opcionales</h3>

            <select class="select-register" name="brand">
                <option value=1 selected hidden>Selecciona una marca</option><?php selectAll('brand') ?>
            </select><span class="span-register" id="addBrand">+</span><br>

            <select class="select-register" name="material">
                <option value=1 selected hidden>Selecciona un material</option><?php selectAll('material') ?>
            </select><span class="span-register" id="addMaterial">+</span><br>

            <select class="select-register" name="color">
                <option value=1 selected hidden>Selecciona un color</option><?php selectAll('color') ?>
            </select><span class="span-register" id="addColor">+</span><br>
            <button class="button-register" name="saveProduct" type="submit">Registrar Producto</button>
        </form>
    </section>

    <section class="index-section-table">
        <h2 class="title-table">Lista de Productos</h2>
        <table class="uk-table uk-table-hover uk-table-striped" id="example">
            <thead>
                <tr>
                    <th>Imagen</th>
                    <th>Nombre</th>
                    <th>Precio (Bs)</th>
                    <th>Categoria</th>
                    <th>Código</th>
                    <th>Marca</th>
                    <th>Material</th>
                    <th>Color</th>
                    <th>Acción</th>
                </tr>
            </thead>
            <tbody>
                <?php selectAllProduct() ?>
            </tbody>
        </table>
    </section>


    
    <!-- JS -->
    <?php include $url.'/admin/views/modal.php' ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.js"></script>
    <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.12.1/js/dataTables.uikit.min.js"></script>
    <script src="<?php $url?>/admin/assets/js/index.js"></script>
</body>
</html>