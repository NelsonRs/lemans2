<?php $root = $_SERVER['DOCUMENT_ROOT'];?>
<!DOCTYPE html>
<html lang="es">
<head>
    <!-- META -->
    <?php include_once $root.'/php/templates/head/meta.php'; ?>
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
    <?php include_once $root.'/php/templates/head/css.php'; ?>

    <title>Inicio | Le Mans</title>
</head>
<body>
    <main data-scroll-container>

        <!-- HEADER -->
        <?php include_once $root.'/php/templates/header.php'; ?>

        <!-- NAVBAR -->
        <?php include_once $root.'/php/templates/nav.php'; ?>

        <section data-scroll-section class="section-index-hero">
            <h1>Le Mans Ltda.</h1>
            <a href="?" class="col-1">
                <img id="img-hero-1" class="img-1" src="/assets/img/banner/banner-index-hero-furniture-1.webp" alt="Sección de Muebles">
                <p>Muebles</p>
            </a>
            <a href="?" class="col-2">
                <img id="img-hero-2" src="/assets/img/banner/banner-index-hero-iluminacion-1.jpg" alt="Sección de Iluminación">
                <p>Iluminación</p>
            </a>
            <a href="?" class="col-3">
                <img id="img-hero-3" src="/assets/img/banner/banner-index-hero-jardineria-1.webp" alt="Sección de Jardinería">
                <p>Jardinería</p>
            </a>
        </section>

        <section data-scroll-section class="section-index-block-1" >
            <div data-scroll data-scroll-speed="1" class="b-1">
                <p>Convierte tu hogar en un lugar de paz y bienestar con Le Mans, nuestros productos combinan un diseño noble y moderno con materiales de la más alta calidad.</p>
            </div>
            <div data-scroll data-scroll-speed="1" class="b-2">
                <h2>Homecenter</h2>
            </div>
            <div data-scroll data-scroll-speed="2" class="b-3" id="fixed-target">
                <img src="/assets/img/banner/banner-index-homecenter-1.webp" alt="Mesas">
                <h3>Mesas</h3>
            </div>
            <div data-scroll data-scroll-speed="2" class="b-4">
                <img src="/assets/img/banner/banner-index-homecenter-2.webp" alt="Decoración">
                <h3>Decoración</h3>
            </div>
            <div data-scroll data-scroll-speed="1" class="b-5">
                <img src="/assets/img/banner/banner-index-homecenter-3.webp" alt="Ropa">
                <h3>Ropa</h3>
            </div>
        </section>

        <section data-scroll-section class="section-index-block-2">
            <div data-scroll data-scroll-speed="1" class="b-1">
                <p>Construcción Le Mans convierte tu banco de trabajo en un espacio creativo que te otorga el poder con las herramientas necesarias para el trabajo duro, alcanzando la máxima calidad y durabilidad.</p>
            </div>
            <div data-scroll data-scroll-speed="0" class="b-2">
                <h2>Construcenter</h2>
            </div>
            <div data-scroll data-scroll-speed="3" class="b-3">
                <img src="/assets/img/banner/banner-index-construcenter-1.webp" alt="Mesas">
                <h3>Herramientas</h3>
            </div>
            <div data-scroll data-scroll-speed="0" class="b-4">
                <img src="/assets/img/banner/banner-index-construcenter-2.webp" alt="Decoración">
                <h3>Equipo de Seguridad</h3>
            </div>
            <div data-scroll data-scroll-speed="0" class="b-5">
                <img src="/assets/img/banner/banner-index-construcenter-3.webp" alt="Ropa">
                <h3>Azulejos</h3>
            </div>
        </section>

        <section data-scroll-section class="section-index-block-3">
            <div data-scroll data-scroll-speed="1" class="b-1">
                <p>Le Mans abarca todo el sector industrial en un solo lugar proporcionándote todas las herramientas que necesitas para sacar el máximo provecho y utilidad.</p>
            </div>
            <div data-scroll data-scroll-speed="2" class="b-2">
                <h2>Industrial</h2>
            </div>
            <div data-scroll data-scroll-speed="3" class="b-3">
                <img src="/assets/img/banner/banner-index-industrial-1.webp" alt="Mesas">
                <h3>Herramientas</h3>
            </div>
            <div data-scroll data-scroll-speed="1" class="b-4">
                <img src="/assets/img/banner/banner-index-industrial-2.webp" alt="Decoración">
                <h3>Repuestos</h3>
            </div>
            <div data-scroll data-scroll-speed="1" class="b-5">
                <img src="/assets/img/banner/banner-index-industrial-3.webp" alt="Ropa">
                <h3>Generadores</h3>
            </div>
        </section>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
    <script src="<?php $root?>/assets/js/index.js"></script>
    <script src="<?php $root?>/assets/js/main.js"></script>
</body>
</html>