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

?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js no-svg">
<meta charset="<?php bloginfo('charset'); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">


<head>
    <link rel="icon" href="http://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="<?php echo esc_url(__('http://gmpg.org/xfn/11', 'lz-computer-repair')); ?>">
    <link href="https://fonts.googleapis.com/css?family=Raleway:300,400,500,600,700,900" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/assets/css/slick.css">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/assets/css/calendar.css?v=0.1">
    <link rel="stylesheet" type="text/css" href="<?php bloginfo("template_url"); ?>/assets/css/simplebar.css">
    <link rel='stylesheet' href="<?php bloginfo("template_url"); ?>/assets/css/jquery.fancybox.min.css" type='text/css'/>
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i&display=swap" rel="stylesheet">
    <?php wp_enqueue_script("jquery"); ?>
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
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/assets/js/jquery.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/assets/js/jquery.fancybox.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/assets/js/simplebar.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/assets/js/slick.min.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/assets/js/libTime.js"></script>
    <script type="text/javascript" src="<?php bloginfo("template_url"); ?>/assets/js/main.js"></script>
</head>
<style>
    html {
        margin-top: 0 !important;
    }
</style>

<body <?php body_class(); ?>>
    <div id="header">
        <div class="bc-search"></div>
        <div class="menu-wrapper">
            <div class="container">
                <div class="menu-wrap">
                    <div class="menu-logo"><a href="<?= home_url() ?>/"><img src="<?php bloginfo("template_url"); ?>/assets/images/logo.png" alt=""></a></div>
                    <div class="search-wrap" style="display:;">
                        <div class="search-block">
                            <div class="search-item">
                                <div class="input-search_wrap">
                                    <input placeholder="Куда вы едете?" type="text" id="searchInput" class="search-input">
                                    <div class="windows8" style="display: none;">
                                        <img src="<?php bloginfo("template_url"); ?>/assets/images/2.gif" alt="">
                                    </div>
                                    <div class="search-icon-des">
                                        <img src="<?php bloginfo("template_url"); ?>/assets/images/search-icon-white.svg" alt="">
                                    </div>
                                </div>
                                <div class="search-list_wrap block-scrollbar scroll-init">
                                    <div class="list-country"></div>
                                    <div class="exp-header" style="display:none;">ПОПУЛЯРНЫЕ ЭКСКУРСИИ</div>
                                    <div class="list-tours"></div>
                                    <div class="not-found" style="display: none;">По Вашему запросу ничего не найдено (</div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <nav class="menu">
                        <ul>
                            <li><a href="<?= home_url() ?>/all-countries/" class="open-contry green">СТРАНЫ</a></li>
                            <li><a class="green" href=" <?= home_url() ?>/blog/ ">БЛОГ</a></li>
                            <li><a class="green" href="<?= home_url() ?>/about/">О НАС</a></li>
                            <li><a class="link-ask" href="<?= home_url() ?>/feedback/">ЗАДАТЬ ВОПРОС</a></li>
                        </ul>
                    </nav>
                    <div class="burger"><img class="burger-btn" src="<?php bloginfo("template_url"); ?>/assets/images/burger-icon.png" alt=""></div>
                    <div class="search-icon"><img src="<?php bloginfo("template_url"); ?>/assets/images/search-icon.svg" alt=""></div>
                </div>
            </div>
        </div>
    </div>


    <script>
        $('.burger-btn').click(function() {
            $(".menu-mobile").toggleClass('menu-mobile-active');
        });
    </script>
    <!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH5TPRC" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->