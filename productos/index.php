<?php $root = $_SERVER['DOCUMENT_ROOT']; require_once $root."/php/models/class.php"; ?>
<!DOCTYPE html>
<html lang="es">

<head>
    <!-- META -->
    <?php include_once $root . '/php/templates/head/meta.php'; ?>
    <meta name="title" content="Le Mans - Multitienda en distribución de productos importados">
    <meta name="description" content="Somos una multitienda dedicada a la distribución de productos importados, caracterizados por normas de calidad, precio justo y accesible al público.">
    <meta name="keywords" content="le mans, le mans santa cruz">
    <!-- OG -->
    <meta property="og:title" content="Le Mans">
    <meta property="og:type" content="website">
    <meta property="og:locale" content="es_ES">
    <meta property="og:url" content="https://www.lemans.com.bo/">
    <meta property="og:description" content="Somos una multitienda dedicada a la distribución de productos importados, caracterizados por normas de calidad, precio justo y accesible al público.">
    <meta property="og:image" content="https://www.lemans.com.bo/assets/img/index/hero/banner-1.jpg">
    <meta property="og:site_name" content="Le Mans - Multitienda en distribución de productos importados">
    <meta name="facebook:site" content="lemans.ltda">
    <meta property="article:publisher" content="https://www.facebook.com/lemans.ltda/">
    <!-- CSS -->
    <?php include_once $root . '/php/templates/head/css.php'; ?>
    <title>Productos | Le Mans</title>
</head>
<body>
    <main>
        <?php
        $url = $_SERVER['REQUEST_URI'];
        $url = @array_pop(array_filter(explode('/',"$url")));
        // print_r($url)
        ?>
        <!-- NAVBAR -->
        <?php include_once $root . '/php/templates/nav.php'; ?>
        <section class="section-products">
            <div class="search">
                <h1>Todos los Productos</h1>
                <form action="#" method="post">
                    <input type="search" name="search" id="search" placeholder="Buscar">
                </form>
            </div>
            <div class="grid" id="grid">
                <div class="col-left">
                    <div class="filter">
                        <button class="collapsible">
                            <h2>Categorías</h2>
                        </button>
                        <form class="content form">
                            <ul> <?=selectCheckbox('kind')?> </ul>
                        </form>
                    </div>
                    <div class="filter">
                        <button class="collapsible">
                            <h2>Marcas</h2>
                        </button>
                        <form class="content form">
                            <ul> <?=selectCheckbox('brand')?> </ul>
                        </form>
                    </div>
                    <div class="filter">
                        <button class="collapsible">
                            <h2>Material</h2>
                        </button>
                        <form class="content form">
                            <ul> <?=selectCheckbox('material')?> </ul>
                        </form>
                    </div>
                    <div class="filter">
                        <button class="collapsible">
                            <h2>Color</h2>
                        </button>
                        <form class="content form">
                            <ul> <?=selectCheckbox('color')?> </ul>
                        </form>
                    </div>
                </div>
                <div class="col-right">
                    <div class="products">
                        <?=selectProducts()?>
                    </div>
                </div>
            </div>
        </section>
    </main>
    <!-- JS -->
    <?php include_once $root.'/php/templates/head/js.php'; ?>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
    <script src="<?php $root?>/assets/js/product.js"></script>
</body>
</html>