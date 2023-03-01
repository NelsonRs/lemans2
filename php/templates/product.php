<?php $root = $_SERVER['DOCUMENT_ROOT']; require_once $root."/php/models/class.php"; 
    $url = $_SERVER['REQUEST_URI'];
    $url = @array_pop(array_filter(explode('/',"$url")));
    $end = (explode('-',$url));
    $id = end($end);
    $product = selectProductDetailById($id);
    // print_r($product);
?>
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
    <title><?=$product['name']?> | Productos | Le Mans</title>
</head>
<body>
    <main>
        <!-- NAVBAR -->
        <?php include_once $root . '/php/templates/nav.php'; ?>
        
        <div class="breadcrumb">
            <a href="/">Inicio</a>
            <i>&nbsp;/&nbsp;</i>
            <a href="/productos/">Productos</a>
            <i>&nbsp;/&nbsp;</i>
            <p><?=$product['name']?></p>
        </div>

        <section class="section-product-detail">
            <div class="product-detail">
                <div class="left-col">
                    <img src="/assets/img/product/<?=$product['image']?>" alt="<?=$product['image']?>" title="<?=$product['name']?>">
                </div>
                <div class="right-col">
                    <div class="title">
                        <h1><?=$product['name']?></h1>
                        <h2><?=$product['brand']?></h2>
                    </div>
                    <p class="price"><?=$product['price']?> Bs</p>
                    <p class="easy-credit"><a href="#">Disponible para comprar con tu tarjeta<i>&nbsp;&nbsp;<img src="/assets/svg/easy-credit.svg" alt="Easy Credit" title="Easy Credit"></i></a></p>
                    <div class="description">
                        <p>SKU:&nbsp;<b><?=$product['cod']?></b></p>
                        <p>Material:&nbsp;<b><?=$product['material']?></b></p>
                        <p>Color:&nbsp;<b><?=$product['color']?></b></p>
                    </div>
                    <button>Comprar</button>
                    <button>Easy Credit</button>
                </div>
            </div>
        </section>

    </main>
    <!-- JS -->
    <?php include_once $root.'/php/templates/head/js.php'; ?>
</body>
</html>