<?php

/**
 * The header for our theme
 *
 * @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
 */

?>
<?php
require_once 'sys/inc.php';
get_template_part('all-contry.php');
$list = [];
getAllResults('https://experience.tripster.ru/api/countries/?format=json', $list);


$listCities = [];
getAllResults('https://experience.tripster.ru/api/cities/', $listCities);

$listTours = [];
getAllResultsNoNext('https://experience.tripster.ru/api/experiences/', $listTours)

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<head>
    <link rel="icon" href="https://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="<?php echo esc_url(__('http://gmpg.org/xfn/11', 'lz-computer-repair')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/slick.css">
    <link rel='stylesheet' id='style-css' href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/style.css?ver=5.1.1" type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/icomoon.css?ver=5.1.1" type='text/css' media='all' />
    <link rel='stylesheet' id='style-css' href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/jquery.fancybox.min.css" type='text/css' media='all' />
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script data-ad-client="ca-pub-1224554491202001" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
    <!-- Google Tag Manager -->
    <script data-ad-client="ca-pub-1224554491202001" async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
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
        })(window, document, 'script', 'dataLayer', 'GTM-KH5TPRC');
    </script>
    <!-- End Google Tag Manager -->
    <?php if (is_page(44)) { ?>
        <meta name="keywords" content="экскурсии, <?php echo ($list[0]->country->name_ru); ?>, русский, на русском, гиды, авторские, эксклюзивные, исторические, обзорные, пешеходные, на автобусе, купить, заказать, забронировать, цена, недорого, дешево, скидка, описание, список, прайс, травэл, мания, travel, mania" />
        <meta name="description" content="У нас можно заказать недорогие авторские экскурсии  <?php echo ($list[0]->country->in_obj_phrase); ?> на русском языке с лучшими гидами. Цены без посредников и удобные даты." />
    <?php } ?>
    <?php wp_head(); ?>
</head>
<style>
    html {
        margin-top: 0 !important;
    }
</style>

<body <?php body_class(); ?>>
    <div id="header">
        <div class="menu-wrapper">
            <div class="container">
                <div class="menu-wrap">
                    <div class="menu-logo"><a href="<?= home_url() ?>/"><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/logo.png" alt=""></a></div>
                    <nav class="menu">
                        <ul>
                            <li><a class="green" href="<?= home_url() ?>/">ГЛАВНАЯ</a></li>
                            <li>
                                <a class="open-contry green">
                                    <span style="margin-right:5px">СТРАНЫ</span>
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="15" height="15" viewBox="0 0 172 172" style=" fill:#000000;">
                                        <g transform="translate(-25.8,-25.8) scale(1.3,1.3)">
                                            <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                                <path d="M0,172v-172h172v172z" fill="none"></path>
                                                <g fill="#ffffff" class="fill">
                                                    <path d="M150.5,79.6145v0c0,-9.5245 -10.61383,-15.20767 -18.54017,-9.92583l-45.95983,30.64467l-45.95983,-30.6375c-7.92633,-5.28183 -18.54017,0.39417 -18.54017,9.91867v0c0,3.98467 1.99233,7.71133 5.3105,9.92583l51.24167,34.15633c4.816,3.21067 11.08683,3.21067 15.90283,0l51.24167,-34.15633c3.311,-2.2145 5.30333,-5.934 5.30333,-9.92583z"></path>
                                                </g>
                                            </g>
                                        </g>
                                    </svg>
                                </a>
                                <ul class="all-contry">
                                    <li><a href="<?= home_url() ?>/all-countries/">Все страны</a></li>
                                    <li class="list-contry">
                                        <?php foreach ($list as $country) { ?>
                                            <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', urlencode($country->name_en)) ?>/">
                                                <?php echo $country->name_ru ?>
                                            </a>
                                        <?php } ?>
                                    </li>
                                </ul>
                            </li>
                            <li><a class="green" href="<?= home_url() ?>/all-cities/">ГОРОДА</a></li>
                            <li><a class="green" href=" <?= home_url() ?>/blog/ ">БЛОГ</a></li>
                            <li><a class="green" href="<?= home_url() ?>/about/">О НАС</a></li>
                            <li><a class="link-ask" href="<?= home_url() ?>/feedback/">ЗАДАТЬ ВОПРОС</a></li>
                        </ul>
                    </nav>
                </div>

            </div>
        </div>
        <div class="menu-wrapper-mobile">
            <div class="menu-wrap">
                <div class="container">
                    <div class="menu-logo"><a href="<?= home_url() ?>/"><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/logo.png" alt=""></a></div>
                    <div class="burger"><img class="burger-btn" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/burger-icon.png" alt=""></div>
                </div>
            </div>
            <nav class="menu-mobile">
                <ul>
                    <li><a href="<?= home_url() ?>/">ГЛАВНАЯ</a></li>
                    <li><a href="<?= home_url() ?>/all-countries/" class="open-contry-mobile">СТРАНЫ</a></li>
                    <li><a href="<?= home_url() ?>/all-cities/">ГОРОДА</a></li>
                    <li><a href=" <?= home_url() ?>/blog/">БЛОГ</a></li>

                    <li><a href="<?= home_url() ?>/about/">О НАС</a></li>
                    <li><a class="link-ask" href="<?= home_url() ?>/feedback/">ЗАДАТЬ ВОПРОС</a></li>
                </ul>
            </nav>
        </div>
    <!--    <div class="search-wrap">
            <div class="search-block">
                <div class="search-item">
                    <input placeholder="Куда вы собираетесь?" type="text" id="searchInput" class="search-input">
                    <ul id="searchList" class="search-list">
                        <?php foreach ($list as $country) { ?>
                            <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', urlencode($country->name_en)) ?>/">
                                <?php echo $country->name_ru ?>
                            </a>
                        <?php } ?>
                        <?php foreach ($listCities as $town) { ?>
                            <?php
                            $city_name = str_replace('é', 'e', $town->name_en);
                            $city_name = str_replace('ё', 'e', $town->name_en);
                            $city_name = str_replace("'", '', $city_name);
                            $city_name = str_replace("ó", 'o', $city_name);
                            if ($city__name_en == 'Villefranche-sur-Saône') {
                                $city__name_en = "Villefranche-sur-Saone";
                            } ?>
                            <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', urlencode($town->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($city_name)) ?>/">
                                <?php echo $town->name_ru ?>
                            </a>
                        <?php } ?>
                        <?php foreach ($listTours as $tour) { ?>
                            <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', str_replace(' ', '-', $tour->city->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($tour->city->name_en)) ?>/excursion-<?= $tour->id ?>/">
                                <?php echo($tour->title) ?>
                            </a>
                        <?php } ?>
                    </ul>
                </div>
            </div>
        </div> -->
    </div>


    <script>
        $('.open-contry').click(function() {
            $(".all-contry").toggleClass('all-contry-active');
        });
        $('.open-contry-mobile').click(function() {
            $(".all-contry-mobile").toggleClass('all-contry-mobile-active');
        });
        $('.burger-btn').click(function() {
            $(".menu-mobile").toggleClass('menu-mobile-active');
        });
        var menuLinks = document.querySelector(".menu-wrapper .menu .list-contry");
        $(document).ready(function() {
            Array.apply(null, menuLinks.querySelectorAll("a"))
                .sort(function(a, b) {
                    a = a.text;
                    b = b.text;
                    return a < b ? -1 : a > b ? 1 : 0
                })
                .forEach(function(a) {
                    menuLinks.appendChild(a)
                });
        });

        let inputSearch = $(".search-wrap input.search-input");
        console.log(inputSearch)
        inputSearch.click(function() {
            $(".search-wrap").addClass("active")
        })

        inputSearch.blur(function() {
            $(".search-wrap").removeClass("active")
        })
        inputSearch.attr('spellcheck', false);

        $("#searchInput").on("keyup", function() { //2
            var value = $(this).val().toLowerCase(); //3
            $("#searchList a").filter(function() { //4
                $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1) //5
            });
        });
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH5TPRC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->