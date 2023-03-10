<?php $root = $_SERVER['DOCUMENT_ROOT']; require_once $root.'/php/models/class.php';?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin | Le Mans</title>
    <link rel="stylesheet" href="<?php $root?>/admin/assets/css/style.css">
</head>
<body>
    <nav>
        <div class="nav-logo">
            <a href="/admin"><img src="/assets/svg/logo/le-mans/logo-le-mans-without-bg.svg" alt="Logo Le Mans"></a>
        </div>
        <div class="nav-item">
            <a href="#">Admin</a>
            <a href="#">Cerrar sesión</a>
        </div>
    </nav>
    <button id="theme-switch"></button>

    <section class="section-register">
        <h1>Registro Producto</h1>
        <form action="/php/models/class.php" method="post" enctype="multipart/form-data">
            <div class="col">
                <div class="col-item">
                    <label for="reg-name">Nombre Producto <i>•</i></label>
                    <input id="reg-name" name="reg-name" type="text" placeholder="Obligatorio" required>

                    <label for="reg-sku">SKU <i>•</i></label>
                    <input id="reg-sku" name="reg-sku" type="text" placeholder="Obligatorio" required>

                    <label for="reg-price">Precio <i>•</i></label>
                    <input id="reg-price" name="reg-price"  min="1" type="number" pattern="^[0-9]+" placeholder="Obligatorio" required>

                    <label for="reg-img">Subir Imagen <i>•</i></label>
                    <input type="file" name="reg-img" id="reg-img">

                    <label for="reg-brand">Marca</label>
                    <select name="reg-brand" id="reg-brand" name="reg-brand">
                        <option value="1" hidden selected>Seleccionar Marca</option>
                        <?=selectForm('brand')?>
                    </select>

                    <label for="reg-collection">Colección</label>
                    <select name="reg-collection" id="reg-collection" name="reg-collection">
                        <option value="1" hidden selected>Seleccionar Colección</option>
                        <?=selectForm('collection')?>
                    </select>
                    
                </div>
                <div class="col-item">
                    
                    <label for="reg-department">Departamento</label>
                    <select name="reg-department" id="reg-department">
                        <option value="1" hidden selected>Seleccionar Departamento</option>
                        <?=selectForm('department')?>
                    </select>

                    <label for="reg-type1">Grupo</label>
                    <select name="reg-type1" id="reg-type1">
                        <option value="1" hidden selected>Seleccionar Grupo</option>
                        <?=selectForm('type1')?>
                    </select>

                    <label for="reg-type2">Subgrupo</label>
                    <select name="reg-type2" id="reg-type2">
                        <option value="1" hidden selected>Seleccionar Subgrupo</option>
                        <?=selectForm('type2')?>
                    </select>

                    <label for="reg-type3">Clase</label>
                    <select name="reg-type3" id="reg-type3">
                        <option value="1" hidden selected>Seleccionar Clase</option>
                        <?=selectForm('type3')?>
                    </select>

                    <label for="reg-material">Material</label>
                    <select name="reg-material" id="reg-material">
                        <option value="1" hidden selected>Seleccionar Material</option>
                        <?=selectForm('material')?>
                    </select>

                    <label for="reg-color">Color</label>
                    <select name="reg-color" id="reg-color">
                        <option value="1" hidden selected>Seleccionar Color</option>
                        <?=selectForm('color')?>
                    </select>
                    
                </div>
            </div>
            <button class="reg-save" name="reg-save" type="submit">Registrar</button>
        </form>
    </section>

    <section class="section-filter">
        <h2>Registro</h2>
    </section>

<script src="<?php $root?>/assets/js/main.js"></script>
</body>
</html>