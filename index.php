<?php
    $root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php $root?>/assets/css/style.css">
    <title>Inicio | Le Mans</title>
</head>
<body>
    <!-- HEADER -->
    <?php include_once $root.'/php/templates/header.php'; ?>
    <!-- NAVBAR -->
    <?php include_once $root.'/php/templates/nav.php'; ?>

    <section class="section-index-hero">
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

    <section class="section-index-block-1">
        <div class="b-1">
            <p>Convierte tu hogar en un lugar de paz y bienestar con Le Mans, nuestros productos combinan un diseño noble y moderno con materiales de la más alta calidad.</p>
        </div>
        <div class="b-2">
            <h2>Homecenter</h2>
        </div>
        <div class="b-3">
            <img src="/assets/img/banner/banner-index-homecenter-1.webp" alt="Mesas">
            <h3>Mesas</h3>
        </div>
        <div class="b-4">
            <img src="/assets/img/banner/banner-index-homecenter-2.webp" alt="Decoración">
            <h3>Decoración</h3>
        </div>
        <div class="b-5">
            <img src="/assets/img/banner/banner-index-homecenter-3.webp" alt="Ropa">
            <h3>Ropa</h3>
        </div>
    </section>

    <section class="section-index-block-2">
        <div class="b-1">
            <p>Construcción Le Mans convierte tu banco de trabajo en un espacio creativo que te otorga el poder con las herramientas necesarias para el trabajo duro, alcanzando la máxima calidad y durabilidad.</p>
        </div>
        <div class="b-2">
            <h2>Construcenter</h2>
        </div>
        <div class="b-3">
            <img src="/assets/img/banner/banner-index-construcenter-1.webp" alt="Mesas">
            <h3>Herramientas</h3>
        </div>
        <div class="b-4">
            <img src="/assets/img/banner/banner-index-construcenter-2.webp" alt="Decoración">
            <h3>Equipo de Seguridad</h3>
        </div>
        <div class="b-5">
            <img src="/assets/img/banner/banner-index-construcenter-3.webp" alt="Ropa">
            <h3>Azulejos</h3>
        </div>
    </section>

    <section class="section-index-block-3">
        <div class="b-1">
            <p>Le Mans abarca todo el sector industrial en un solo lugar proporcionándote todas las herramientas que necesitas para sacar el máximo provecho y utilidad.</p>
        </div>
        <div class="b-2">
            <h2>Industrial</h2>
        </div>
        <div class="b-3">
            <img src="/assets/img/banner/banner-index-industrial-1.webp" alt="Mesas">
            <h3>Herramientas</h3>
        </div>
        <div class="b-4">
            <img src="/assets/img/banner/banner-index-industrial-2.webp" alt="Decoración">
            <h3>Repuestos</h3>
        </div>
        <div class="b-5">
            <img src="/assets/img/banner/banner-index-industrial-3.webp" alt="Ropa">
            <h3>Generadores</h3>
        </div>
    </section>
    <script src="<?php $root?>/assets/js/index.js"></script>
</body>
</html>