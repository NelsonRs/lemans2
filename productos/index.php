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

    <title>Productos | Le Mans</title>
</head>
<body>
    <main data-scroll-container>
        
        <!-- NAVBAR -->
        <?php include_once $root.'/php/templates/nav.php'; ?>
   
        <section data-scroll-section class="section-products">
            <header data-scroll data-scroll-speed="1">
                <h1>Todos los Productos</h1>
            </header>
            <div data-scroll data-scroll-speed="1" class="search">
                <form action="#" method="post">
                    <input type="search" name="search" id="search" placeholder="Buscar">
                </form>
            </div>
            <div data-scroll-speed="1" class="grid" id="grid">
                <div class="col-left">
                    <div data-scroll data-scroll-sticky data-scroll-target="#grid" data-scroll-speed="1" class="filter-1">
                        <div class="filter">
                            <button class="collapsible"><h2>Categorías</h2></button>
                            <ul class="content">
                                <li class="option">
                                    <input name="category-checkbox" type="checkbox" id="category-checkbox-0" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="category-checkbox-0"><span class="filter-title">Linea Blanca</span></label>
                                </li>
                                <li class="option">
                                    <input name="category-checkbox" type="checkbox" id="category-checkbox-1" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="category-checkbox-1"><span class="filter-title">Decoración</span></label>
                                </li>
                                <li class="option">
                                    <input name="category-checkbox" type="checkbox" id="category-checkbox-2" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="category-checkbox-2"><span class="filter-title">Iluminación</span></label>
                                </li>
                                <li class="option">
                                    <input name="category-checkbox" type="checkbox" id="category-checkbox-3" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="category-checkbox-3"><span class="filter-title">Muebles</span></label>
                                </li>
                                <li class="option">
                                    <input name="category-checkbox" type="checkbox" id="category-checkbox-4" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="category-checkbox-4"><span class="filter-title">Ropa</span></label>
                                </li>
                            </ul>
                        </div>
                        <div class="filter">
                            <button class="collapsible"><h2>Marcas</h2></button>
                            <ul class="content">
                                <li class="option">
                                    <input name="brand-checkbox" type="checkbox" id="brand-checkbox-0" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="brand-checkbox-0"><span class="filter-title">Ashley</span></label>
                                </li>
                                <li class="option">
                                    <input name="brand-checkbox" type="checkbox" id="brand-checkbox-1" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="brand-checkbox-1"><span class="filter-title">BestWay</span></label>
                                </li>
                                <li class="option">
                                    <input name="brand-checkbox" type="checkbox" id="brand-checkbox-2" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="brand-checkbox-2"><span class="filter-title">Huracan</span></label>
                                </li>
                                <li class="option">
                                    <input name="brand-checkbox" type="checkbox" id="brand-checkbox-3" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="brand-checkbox-3"><span class="filter-title">Sunday</span></label>
                                </li>
                                <li class="option">
                                    <input name="brand-checkbox" type="checkbox" id="brand-checkbox-4" data-filter-group="hand-size" data-filter-val="small" data-filter-title="Pequeña">
                                    <label class="h6" for="brand-checkbox-4"><span class="filter-title">Supermax</span></label>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-right">
                    <div class="products">
                        <div class="card">
                            <div class="top">
                                <img src="/assets/img/product/poltrona-1.png">
                            </div>
                            <div class="bottom">
                                <span><b>•</b>&nbsp;Ashley</span>
                                <p>Poltrona giradora decorativa abney</p>
                                <p>2116 Bs</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top">
                                <img src="/assets/img/product/poltrona-2.png">
                            </div>
                            <div class="bottom">
                                <span><b>•</b>&nbsp;Ashley</span>
                                <p>Poltrona giradora decorativa abney</p>
                                <p>2116 Bs</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top">
                                <img src="/assets/img/product/poltrona-3.png">
                            </div>
                            <div class="bottom">
                                <span><b>•</b>&nbsp;Ashley</span>
                                <p>Poltrona giradora decorativa abney</p>
                                <p>2116 Bs</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top">
                                <img src="/assets/img/product/poltrona-4.png">
                            </div>
                            <div class="bottom">
                                <span><b>•</b>&nbsp;Ashley</span>
                                <p>Poltrona giradora decorativa abney</p>
                                <p>2116 Bs</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top">
                                <img src="/assets/img/product/poltrona-5.png">
                            </div>
                            <div class="bottom">
                                <span><b>•</b>&nbsp;Ashley</span>
                                <p>Poltrona giradora decorativa abney</p>
                                <p>2116 Bs</p>
                            </div>
                        </div>
                        <div class="card">
                            <div class="top">
                                <img src="/assets/img/product/poltrona-6.png">
                            </div>
                            <div class="bottom">
                                <span><b>•</b>&nbsp;Ashley</span>
                                <p>Poltrona giradora decorativa abney</p>
                                <p>2116 Bs</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>

<script src="https://cdn.jsdelivr.net/npm/locomotive-scroll@4.1.4/dist/locomotive-scroll.min.js"></script>
<script src="/assets/js/main.js"></script>
<script src="/assets/js/product.js"></script>
</body>
</html>