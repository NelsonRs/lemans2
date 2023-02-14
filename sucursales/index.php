<?php
$root = $_SERVER['DOCUMENT_ROOT'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sucursales | Le Mans</title>
    <!-- CSS -->
    <?php include_once $root . '/php/templates/head/css.php'; ?>
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.1/dist/leaflet.css" integrity="sha256-sA+zWATbFveLLNqWO2gtiw3HL/lh1giY/Inf1BJ0z14=" crossorigin="" />
    <link rel="stylesheet" href="<?php $url ?>/assets/js/leaflet-routing-machine.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.76.1/dist/L.Control.Locate.min.css" />
    <link rel="stylesheet" href="//unpkg.com/leaflet-gesture-handling/dist/leaflet-gesture-handling.min.css" type="text/css">
    <script src="https://unpkg.com/leaflet@1.9.1/dist/leaflet.js" integrity="sha256-NDI0K41gVbWqfkkaHj15IzU7PtMoelkzyKp8TOaFQ3s=" crossorigin=""></script>
    <script src="<?php $url ?>/assets/js/leaflet-routing-machine.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/leaflet.locatecontrol@0.76.1/dist/L.Control.Locate.min.js" charset="utf-8"></script>
    <script src="//unpkg.com/leaflet-gesture-handling"></script>
</head>
<body>
    <main data-scroll-container>
        <!-- NAVBAR -->
        <?php include_once $root . '/php/templates/nav.php'; ?>
        <section data-scroll-section class="section-office-index">
            <h1>Nuestras Sucursales</h1>
            <div data-scroll data-scroll-speed="1" id="map"></div>
            <button id="route-btn" title="Ver la ruta más cercana" alt="Ver la ruta más cercana"></button>
            <div class="sucursal-grid">
                <a href="https://www.google.com/maps/place/LeMans,+Santa+Cruz+de+la+Sierra/data=!4m2!3m1!1s0x93f1e7bf0d91e71b:0x864b285fdf0a435d?utm_source=mstt_1&entry=gps&lucs=swa" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Banzer</h2>
                    <p>Av. Banzer 4to anillo</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 028</p>
                    </div>
                </a>
                <a href="https://www.google.es/maps/place/Le+Mans/@-17.7796016,-63.1475531,17.08z/data=!4m5!3m4!1s0x93f1e885798c2e2f:0x8e0dce2907c1c381!8m2!3d-17.7800237!4d-63.146914?hl=es" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Virgen de Cotoca</h2>
                    <p>Av. Virgen de Cotoca 4to anillo</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 023</p>
                    </div>
                </a>
                <a href="https://www.google.ru/maps/place/HomeCenter+LE+MANS/@-17.7777157,-63.142622,369m/data=!3m1!1e3!4m5!3m4!1s0x93f1e9e4472dab81:0x60d5752f25e64b8e!8m2!3d-17.7773073!4d-63.1425245" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Virgen de Cotoca</h2>
                    <p>Av. Virgen de Cotoca 5to anillo</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>689 20 902</p>
                    </div>
                </a>
                <a href="https://www.google.com/maps/place/MegaLemans/@-17.801871,-63.1960688,19z/data=!4m6!3m5!1s0x93f1e82234e1ea41:0x8fc807c9a89b0a8b!8m2!3d-17.8015798!4d-63.1962245!16s%2Fg%2F11dymv1w9r" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Grigota</h2>
                    <p>Av. Grigota entre 2do y 3er anillo</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 014</p>
                    </div>
                </a>
                <a href="https://www.google.com/maps/place/Le+Mans+Argamoza/@-17.7787988,-63.1735769,18.5z/data=!4m5!3m4!1s0x93f1e9fd69831d8f:0x1d464bcc347e44b2!8m2!3d-17.7787503!4d-63.1731049" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Argamoza</h2>
                    <p>Av. Argamoza #36</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 031</p>
                    </div>
                </a>
                <a href="https://goo.gl/maps/oUCJvDqJtpGEn1B69" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Bayon</h2>
                    <p>Entre 2do y 3er anillo</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 026</p>
                    </div>
                </a>
                <a href="https://www.google.com/maps/place/Le+Mans+El+Trompillo/@-17.7996861,-63.1821598,18z/data=!4m6!3m5!1s0x93f1e83f754c8203:0xcb1e01d1e9a510da!8m2!3d-17.7995028!4d-63.1811772!16s%2Fg%2F11f16w01l8?hl=es" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>El Trompillo</h2>
                    <p>Av. El trompillo 719 entre Av. Santos Dumont, Av Escuadron Velasco</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 011</p>
                    </div>
                </a>
                <a href="https://www.google.com/maps/place/LE+MANS/@-17.7653678,-63.1811231,19.5z/data=!4m5!3m4!1s0x93f1e765054956a1:0xe422420a48899dd7!8m2!3d-17.7649634!4d-63.180865?hl=es&shorturl=1" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>El Cristo</h2>
                    <p>Entre 2do y 3er anillo</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 021</p>
                    </div>
                </a>
                <a href="https://www.google.com/maps/place/Le+Mans+Montero/@-17.3393516,-63.2585559,20z/data=!4m6!3m5!1s0x93ee3f69d7eb5f4d:0xd479a06b4917fb7f!8m2!3d-17.3390453!4d-63.2577834!16s%2Fg%2F11j7kpjmfq?hl=es" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Montero (Montero)</h2>
                    <p>Av. Montero</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>678 98 159</p>
                    </div>
                </a>
                <a href="https://www.google.com/maps/place/Le+ManS/@-17.3933108,-66.1625681,20.5z/data=!4m5!3m4!1s0x93e37301037820b1:0x86b771cd0cf36426!8m2!3d-17.3933621!4d-66.1625813?hl=es&shorturl=1" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Heroínas (Cochabamba)</h2>
                    <p>Av. Heroínas, Cochabamba</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 05 029</p>
                    </div>
                </a>
                <a href="https://goo.gl/maps/1AFQxuePTLzdNP4G8" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>Viacha (La Paz)</h2>
                    <p>Carr. Viacha Ladislao Cabrera, El Alto</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 07 107</p>
                    </div>
                </a>
                <a href="https://www.google.com/maps/place/Toscana+Pizzas+y+Pastas/@-16.5035558,-68.1374366,19z/data=!4m5!3m4!1s0x915f207a1cd874dd:0x336455e70553f535!8m2!3d-16.5034999!4d-68.1369922" target="_blank">
                    <img src="/assets/svg/location/location.svg" alt="">
                    <h2>San Pedro (La Paz)</h2>
                    <p>Calle Colombia, El Alto</p>
                    <div class="whatsapp">
                        <img src="/assets/svg/whatsapp.svg" alt="">
                        <p>721 07 107</p>
                    </div>
                </a>
            </div>
        </section>
    </main>
    <!-- JS -->
    <?php include_once $root . '/php/templates/head/js.php'; ?>
    <script src="<?php $root ?>/assets/js/maps.js"></script>
</body>
</html>