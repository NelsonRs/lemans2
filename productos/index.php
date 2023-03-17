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
        <!-- NAVBAR -->
        <?php include_once $root . '/php/templates/nav.php'; ?>
        <section class="section-furniture">
            <h1>Productos | Le Mans</h1>
            <header><h2>Muebles</h2></header>
            <div class="articles">
                <article>
                    <div class="col-1">
                        <a href="/categorias/recliners/">
                            <img src="/assets/img/banner/mueble-1-product.png">
                        </a>
                    </div>
                    <div class="col-2">
                        <h3>Recliners</h3>
                        <p>Los más cómodos loveseats de calidad americana.</p>
                        <a href="/categorias/recliners/"><button>Ver producto <i><svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.441 0.541461L11.3688 7.67316L9.82812 7.68624L9.87794 3.19242L2.08547 10.9849L0.997613 9.89703L8.79008 2.10456L4.28468 2.1428L4.29776 0.602097L11.441 0.541461Z" fill="#1F1F1F"/></svg></i></button></a>
                    </div>
                </article>
                <article>
                    <div class="col-1">
                        <a href="/categorias/sofa/">
                            <img src="/assets/img/banner/mueble-2-product.png">
                        </a>
                    </div>
                    <div class="col-2">
                        <h3>Sofa</h3>
                        <p>Los más cómodos sofas de calidad americana.</p>
                        <a href="/categorias/sofa/"><button>Ver producto <i><svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.441 0.541461L11.3688 7.67316L9.82812 7.68624L9.87794 3.19242L2.08547 10.9849L0.997613 9.89703L8.79008 2.10456L4.28468 2.1428L4.29776 0.602097L11.441 0.541461Z" fill="#1F1F1F"/></svg></i></button></a>
                    </div>
                </article>
            </div>
        </section>
        <section class="section-tiles">
            <header><h2>Revestimiento y Porcelanato</h2></header>
            <div class="articles">
                <article>
                    <div class="col-1">
                        <a href="/categorias/revestimiento/">
                            <img src="/assets/img/banner/revestimiento-product-1.jpg">
                        </a>
                    </div>
                    <div class="col-2">
                        <h3>Revestimiento</h3>
                        <p>Los más cómodos loveseats de calidad americana.</p>
                        <a href="/categorias/revestimiento/"><button>Ver producto <i><svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.441 0.541461L11.3688 7.67316L9.82812 7.68624L9.87794 3.19242L2.08547 10.9849L0.997613 9.89703L8.79008 2.10456L4.28468 2.1428L4.29776 0.602097L11.441 0.541461Z" fill="#1F1F1F"/></svg></i></button></a>
                    </div>
                </article>
                <article>
                    <div class="col-1">
                        <a href="/categorias/porcelanato/">
                            <img src="/assets/img/banner/porcelanato-1-product.jpg">
                        </a>
                    </div>
                    <div class="col-2">
                        <h3>Porcelanato</h3>
                        <p>Los más cómodos sofas de calidad americana.</p>
                        <a href="/categorias/porcelanato/"><button>Ver producto <i><svg width="12" height="11" viewBox="0 0 12 11" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M11.441 0.541461L11.3688 7.67316L9.82812 7.68624L9.87794 3.19242L2.08547 10.9849L0.997613 9.89703L8.79008 2.10456L4.28468 2.1428L4.29776 0.602097L11.441 0.541461Z" fill="#1F1F1F"/></svg></i></button></a>
                    </div>
                </article>
            </div>
        </section>
    </main>
    <!-- JS -->
    <?php include_once $root.'/php/templates/head/js.php'; ?>
    <script src="<?php $root?>/assets/js/product.js"></script>
</body>
</html>