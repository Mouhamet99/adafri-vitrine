<!-- Meta Tags  -->
<title>Notre simulateur de prix</title>
<meta name="description" content="Essayer notre simulateur de prix et faites votre pack d'annonces rien que pour vous.">
<meta name="keywords" content="price simulator, online ads africa, publicité en ligne en Afrique">
<?php
include("simulator.css.php");
echo (START_TAGS);
?>
<!-- Google Tag Manager -->
<script>
    (function(w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({
            'gtm.start': new Date().getTime(),
            event: 'gtm.js'
        });
        var f = d.getElementsByTagName(s)[0],
            j = d.createElement(s),
            dl = l != 'dataLayer' ? '&l=' + l : '';
        j.async = true;
        j.src =
            'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
        f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-K6PS79B');
</script>
<!-- End Google Tag Manager -->
<!-- Google Tag Manager (noscript) -->
<noscript>
    <iframe src="https://www.googletagmanager.com/ns.html?id=GTM-K6PS79B" height="0" width="0" style="display:none;visibility:hidden">
    </iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->
<?php
require_once(ROOT_VIEWS_INC . "menu.inc.php");
?>

<!-- hero section  -->
<section class="hero-section hero-section-sm">
    <div class="container">
        <div class="text-center">
            <div class="col">
                <h2>Construisez votre ChatBot<span> sans aucune ligne de code</span></h2>
                <p>
                    Lorem ipsum <span>dolor sit amet</span>, consectetur adipiscing elit. Morbi dui neque, consectetur ac malesuada et, <span>porttitor</span> ac dui.
                </p>
            </div>
        </div>
    </div>
</section>

<section class="soon">
    <div class="container">
        <div class="vh-50 d-flex flex-column align-items-center justify-content-center">
            <img src="<?php echo (WEB_ROOT . 'assets/images/soon.svg') ?>" alt="soon">
            <span class="alert alert-danger mt-5">Bientôt disponible</span>
        </div>
    </div>
</section>