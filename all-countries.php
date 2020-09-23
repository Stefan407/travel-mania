<?php
require_once 'sys/inc.php';
$listCountries = [];
getAllResults('https://experience.tripster.ru/api/countries/?format=json', $listCountries);
?>

<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
<!-- Yandex.Metrika counter -->
<script type="text/javascript" >
    (function (d, w, c) {
        (w[c] = w[c] || []).push(function() {
            try {
                w.yaCounter56569540 = new Ya.Metrika({
                    id:56569540,
                    clickmap:true,
                    trackLinks:true,
                    accurateTrackBounce:true,
                    webvisor:true
                });
            } catch(e) { }
        });

        var n = d.getElementsByTagName("script")[0],
            s = d.createElement("script"),
            f = function () { n.parentNode.insertBefore(s, n); };
        s.type = "text/javascript";
        s.async = true;
        s.src = "https://mc.yandex.ru/metrika/watch.js";

        if (w.opera == "[object Opera]") {
            d.addEventListener("DOMContentLoaded", f, false);
        } else { f(); }
    })(document, window, "yandex_metrika_callbacks");
</script>
<noscript><div><img src="https://mc.yandex.ru/watch/56569540" style="position:absolute; left:-9999px;" alt="" /></div></noscript>
<!-- /Yandex.Metrika counter -->    
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-165860897-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-165860897-1');
</script>

    <link rel="icon" href="https://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Авторские экскурсии в 93 странах 2020 🥇 цены, отзывы и описание • Travel Mania</title>
    <meta name="keywords" content="экскурсии, страны, все, на русском, язык, выбрать, заказать, купить, забронировать, трэвэл, мания, travel, mania" />
    <meta name="description" content="🟢 Групповые и индивидуальные экскурсии в 93 странах с интересными и харизматичными гидами. Быстрое бронирование всех экскурсий по актуальным ценам 2020 года. Перед заказом любой экскурсии можно задать вопрос гиду на сайте. У нас собраны лучшие экскурсии в 93 странах, которые тщательно продуманы и составлены гидами." />
    <?php
    include 'inc/head-static.php';
    ?>

</head>

<body>
    <?php
    include 'inc/header.php';
    ?>
    <section class="top">
        <div class="top__slider">
            <div id="top-images-city" class="image-top_slider ">
                <img class="lazyload" data-src="/uploads/Main/Main-12.jpg" alt="">
            </div>
            <div class="top__slider-text">
                <div class="container">
                    <div class="top__content-text">
                        <h1>Авторские экскурсии в 93 странах</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
            <div class="container breadcrumbs-wrap">
                <div class="breadcrumbs-item">
                    <div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                        <a class="breadcrumbs__link" href="/" itemprop="item">
                            <span itemprop="name">Главная</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </div>
                    <div class="breadcrumbs__arrow">
                        <img src="/assets/images/arrow-bread.png" alt="">
                    </div>
                    <div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                        <p class="breadcrumbs__text">
                            <span itemprop="name">Все страны</span>
                            <meta itemprop="item" content="/all-countries">
                            <meta itemprop="position" content="2">
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="main">
        <div class="contry-main all-cauntries">
            <div class="container">
                <div class="border-box">
                    <h2>Выберите страну для путешествия</h2>
                    <div class="country-btn-wrap">
                        <div class="country-btn">
                            <div class="btn-title"><span>По популярности</span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#2ecc71">
                                            <path d="M150.5,79.6145v0c0,-9.5245 -10.61383,-15.20767 -18.54017,-9.92583l-45.95983,30.64467l-45.95983,-30.6375c-7.92633,-5.28183 -18.54017,0.39417 -18.54017,9.91867v0c0,3.98467 1.99233,7.71133 5.3105,9.92583l51.24167,34.15633c4.816,3.21067 11.08683,3.21067 15.90283,0l51.24167,-34.15633c3.311,-2.2145 5.30333,-5.934 5.30333,-9.92583z"></path>
                                        </g>
                                    </g>
                                </svg></div>
                            <div class="btn-block">
                                <button id="btn-al"><span>По алфавиту</span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 226 226" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,226v-226h226v226z" fill="none"></path>
                                            <g fill="#2ecc71">
                                                <path d="M196.15414,41.11869l-15.58503,-10.59375c-4.3122,-2.92008 -10.22026,-1.79958 -13.10637,2.47866l-76.39723,112.66046l-35.10878,-35.10878c-3.66707,-3.66707 -9.64303,-3.66707 -13.3101,0l-13.34405,13.34405c-3.66707,3.66707 -3.66707,9.64303 0,13.34406l53.98738,53.98738c3.02194,3.02193 7.77555,5.33083 12.05379,5.33083c4.27825,0 8.59044,-2.68239 11.3747,-6.72295l91.94832,-135.64754c2.92007,-4.27824 1.79958,-10.15235 -2.51262,-13.07241z"></path>
                                            </g>
                                        </g>
                                    </svg></button>
                                <button id="btn-rat"><span>По популярности</span><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 226 226" style=" fill:#000000;">
                                        <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                            <path d="M0,226v-226h226v226z" fill="none"></path>
                                            <g fill="#2ecc71">
                                                <path d="M196.15414,41.11869l-15.58503,-10.59375c-4.3122,-2.92008 -10.22026,-1.79958 -13.10637,2.47866l-76.39723,112.66046l-35.10878,-35.10878c-3.66707,-3.66707 -9.64303,-3.66707 -13.3101,0l-13.34405,13.34405c-3.66707,3.66707 -3.66707,9.64303 0,13.34406l53.98738,53.98738c3.02194,3.02193 7.77555,5.33083 12.05379,5.33083c4.27825,0 8.59044,-2.68239 11.3747,-6.72295l91.94832,-135.64754c2.92007,-4.27824 1.79958,-10.15235 -2.51262,-13.07241z"></path>
                                            </g>
                                        </g>
                                    </svg></button>
                            </div>
                        </div>
                    </div>
                    <div id="search">
                        <?php foreach ($listCountries as $country) { ?>
                            <div class="search-element ">
                                <div>
                                    <a style="display:flex;" class="links-country" href="/<?php echo str_replace('+', '-', urlencode($country->name_en)) ?>/">
                                        <svg style="margin-right:5px;min-width:20px;min-height:20px;width:20px;height:20px" height="512px" id="Layer_1" style="enable-background:new 0 0 512 512;" version="1.1" viewBox="0 0 512 512" width="512px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink">
                                            <g fill="#2ecc71">
                                                <path d="M256,32c-74,0-134.2,58.7-134.2,132.7c0,16.4,3.5,34.3,9.8,50.4l-0.1,0l0.6,1.2c0.5,1.1,1,2.2,1.5,3.3L256,480l121.8-259.1   l0.6-1.2c0.5-1.1,1.1-2.2,1.6-3.4l0.4-1.1c6.5-16.1,9.8-33.1,9.8-50.3C390.2,90.7,330,32,256,32z M256,206.9   c-25.9,0-46.9-21-46.9-46.9c0-25.9,21-46.9,46.9-46.9c25.9,0,46.9,21,46.9,46.9C302.9,185.9,281.9,206.9,256,206.9z" />
                                            </g>
                                        </svg>
                                        <?php echo $country->name_ru ?>
                                    </a>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="video">
        <div class="container">
            <div class="border-box">
                <h2>Экскурсии в 93 странах мира</h2>
                <p>Travel Mania — лучшие экскурсионные предложения в 93 странах мира. Все экскурсии авторские: обзорные, исторические, гастрономические и шоппинг туры, экскурсии с детьми, а также спортивные и развлекательные поездки. Мы предлагаем тысячи эксклюзивных экскурсий, которые можно забронировать онлайн. Только тщательно продуманные маршруты и выгодные цены, о чем свидетельствуют более 140 000 отзывов.</p>
                <div class="video-box">
                    <h2>Весь мир за одну минуту</h2>
                    <video controls="controls" playsinline poster="/assets/images/move-img.png">
                        <source src="/assets/video/MOVE.mp4" type="video/webm">
                        <source src="/assets/video/MOVE.mp4" type="video/mp4">
                    </video>
                    <p class="autor">
                        Видео: <a href="/go/?url=https://vimeo.com/27246366" target="_blank">Rick Mereki</a>
                    </p>
                    <div class="video__text">
                        <p>Путешествуя с Travel Mania, Вы откроете самые удивительные места нашей планеты! У Вас есть возможность познать новые страны и города, увидеть известные архитектурные памятники и красоту природы, узнать историю этих мест, особенности менталитета местных жителей, попробовать местную кухню и услышать истории о людях, прославивших эту землю. Выбирайте страну, город, смотрите все актуальные экскурсии и бронируйте понравившееся предложение.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <script>
        document.addEventListener("DOMContentLoaded", function() {

            $(".country-btn-wrap .btn-title").on("click", function() {
                $(".country-btn-wrap .btn-block").toggleClass("active");
            })
            var search = document.querySelector("#search");
            var searchChild = document.querySelector("#search").innerHTML;
            document.getElementById("btn-rat").onclick = function() {
                $(".country-btn-wrap .btn-title span").html(document.querySelector("#btn-rat span").innerHTML);
                $(".country-btn-wrap .btn-block").removeClass("active");
                document.getElementById("btn-al").classList.remove("active");
                document.getElementById("btn-rat").classList.add("active");
                search.innerHTML = searchChild;
            }

            $("#btn-al").on("click", function() {
                $(".country-btn-wrap .btn-title span").html(document.querySelector("#btn-al span").innerHTML);
                $(".country-btn-wrap .btn-block").removeClass("active");
                document.getElementById("btn-al").classList.add("active");
                document.getElementById("btn-rat").classList.remove("active");
                Array.apply(null, search.querySelectorAll(".search-element"))
                    .sort(function(a, b) {
                        a = a.querySelector("div:last-child > a").text;
                        b = b.querySelector("div:last-child > a").text;
                        return a < b ? -1 : a > b ? 1 : 0
                    })
                    .forEach(function(a) {
                        search.appendChild(a)
                    });
                $(".contry-main.all-cauntries").show();

            });

            $(document).ready(function() {
                $("#btn-al").trigger("click");
            })
        })
    </script>
    <?php
    include 'inc/footer.php';
    ?>