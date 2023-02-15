<?php $url = $_SERVER['DOCUMENT_ROOT']; 
require $url.'/admin/models/class.php'; 
require $url.'/admin/models/login/validation.php'; 
if (isset($_POST['id'])) {
    $row=selectProductById($_POST['id']);
    $val=selectById('brand',$row[5]);
?>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="robots" content="noindex">
    <title>Editar Producto</title>
    <link rel="stylesheet" href="<?php $url?>/admin/assets/css/index.css">
</head>
<body> 
    <section class="index-section-register">
        <h2>Actualizar Producto</h2>
        <form action="/admin/models/query.php" method="post" enctype="multipart/form-data">
            Nombre: <input class="input-register" value="<?=$row[1]?>" placeholder="Nombre" type="text" name="name" required><br>
            Precio: <input class="input-register" value="<?=$row[2]?>" placeholder="Precio" type="number" name="price" required><br>
            Código: <input class="input-register" value="<?=$row[3]?>" placeholder="Código" type="text" name="codigo" required><br>
            Categoría: <select class="select-register" required name="category">
                <option value="<?=selectById('kind',$row[4])?>" hidden><?=$row[4]?></option><?php selectAll('kind') ?>
            </select><br>   
            <h3>Opcionales</h3>

            Marca: <select class="select-register" name="brand">
                <option value="<?=selectById('brand',$row[5])?>" selected hidden><?=$row[5]?></option><?php selectAll('brand') ?>
            </select><br>

            Material: <select class="select-register" name="material">
                <option value="<?=selectById('material',$row[6])?>" selected hidden><?=$row[6]?></option><?php selectAll('material') ?>
            </select><br>

            Color: <select class="select-register" name="color">
            <option value="<?=selectById('color',$row[7])?>" selected hidden><?=$row[7]?></option><?php selectAll('color') ?>
            </select><br>
            <button class="button-register" value="<?=$row[0]?>" name="updateProduct" type="submit">Actualizar Producto</button>
        </form>
    </section>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.1/jquery.min.js" integrity="sha512-aVKKRRi/Q/YV+4mjoKBsE4x3H+BkegoM/em46NNlCqNTmUYADjBbeNefNxYV7giUp0VxICtqdrbqU7iVaeZNXA==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="<?php $url?>/admin/assets/js/index.js"></script>
</html>
<?php
    }
?>