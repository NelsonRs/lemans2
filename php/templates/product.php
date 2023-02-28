<?php $root = $_SERVER['DOCUMENT_ROOT']; require_once $root."/php/models/class.php"; 
    $url = $_SERVER['REQUEST_URI'];
    $url = @array_pop(array_filter(explode('/',"$url")));
    $end = (explode('-',$url));
    $id = end($end);
    $product = selectProductById($id);
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
        

    </main>
    <!-- JS -->
    <?php include_once $root.'/php/templates/head/js.php'; ?>
</body>
</html>