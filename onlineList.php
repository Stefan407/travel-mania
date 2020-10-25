<?php

// DATA SEO
$priceAll = [];
$reviewsAll = 0;
$reviewsAllCount = 0;
// $listTags = getData('https://experience.tripster.ru/api/citytags/?city=' . $list[0]->city->id);
// $listTagsNew = $listTags->results;


?>



<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <!-- Yandex.Metrika counter -->
    <script type="text/javascript">
        (function(d, w, c) {
            (w[c] = w[c] || []).push(function() {
                try {
                    w.yaCounter56569540 = new Ya.Metrika({
                        id: 56569540,
                        clickmap: true,
                        trackLinks: true,
                        accurateTrackBounce: true,
                        webvisor: true
                    });
                } catch (e) {}
            });

            var n = d.getElementsByTagName("script")[0],
                s = d.createElement("script"),
                f = function() {
                    n.parentNode.insertBefore(s, n);
                };
            s.type = "text/javascript";
            s.async = true;
            s.src = "https://mc.yandex.ru/metrika/watch.js";

            if (w.opera == "[object Opera]") {
                d.addEventListener("DOMContentLoaded", f, false);
            } else {
                f();
            }
        })(document, window, "yandex_metrika_callbacks");
    </script>
    <noscript>
        <div><img src="https://mc.yandex.ru/watch/56569540" style="position:absolute; left:-9999px;" alt="" /></div>
    </noscript>
    <!-- /Yandex.Metrika counter -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-165860897-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-165860897-1');
    </script>

    <link rel="icon" href="https://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Онлайн-экскурсии по всему миру • Travel Mania</title>
    <meta name="keywords" content="онлайн, виртуальные, экскурсии, вебинары, мастер-классы, по миру, русский, на русском, с гидом, по музеям, по городу, галереи, картины, видео, смотреть, лучшие, травэл, мания, travel, mania" />
    <meta name="description" content="🟢  Регулярные онлайн-экскурсии по всему миру с гидами. Новый формат проведения экскурсий с живой онлайн-трансляцией. Заказывай и смотри онлайн в удобной обстановке." />
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
                        <h1>Онлайн-экскурсии по всему миру</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumbs" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
            <div class="container breadcrumbs-wrap">
                <div class="breadcrumbs-item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <div class="breadcrumbs__block">
                        <a class="breadcrumbs__link" href="/" itemprop="item">
                            <span itemprop="name">Главная</span>
                            <meta itemprop="position" content="1">
                        </a>
                    </div>
                    <div class="breadcrumbs__arrow">
                        <img class="lazyload" data-src="/assets/images/arrow-bread.png" alt="">
                    </div>
                </div>
                <div class="breadcrumbs-item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <div class="breadcrumbs__block">
                        <meta itemprop="item" content="https://travel-mania.org/online-excursions/">
                        <p class="breadcrumbs__text">
                            <span itemprop="name">Онлайн экскурсии по всему миру</span>
                        </p>
                        <meta itemprop="position" content="2">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="border-box js-container-tags">
                <h2>Онлайн-экскурсии и вебинары </h2>
                <div class="border-box__text">
                    <p>Онлайн-экскурсии проходят в виде «живой» трансляции, которую проводит гид гуляя по достопримечательностям и улицам города. Вебинары – это прогулки по городу в Google Street View с презентациями и комментариями гида.</p>
                </div>
                <section class="list-tags">
                    <div class="container">
                        <div class="list-tags-wrap">
                            <a class="active all link" href="/online-excursions/">
                                <span>Все</span>
                            </a>
                            <?php foreach ($list as $item) {

                                // REPLACE CITY
                                $cityBefore = str_replace('é', 'e', $item->city->name_en);
                                $cityBefore = str_replace('ё', 'e', $cityBefore);
                                $cityBefore = str_replace("'", '', $cityBefore);
                                $cityBefore = str_replace("'", '', $cityBefore);
                                $cityBefore = str_replace("+", '-', $cityBefore);
                                $cityBefore = str_replace("+", '-', $cityBefore);
                                $cityBefore = str_replace(" ", '-', $cityBefore);
                                $cityBefore = str_replace(" ", '-', $cityBefore);
                                $cityBefore = str_replace("ó", 'o', $cityBefore);
                                if ($cityBefore == 'Villefranche-sur-Saône') {
                                    $cityBefore = "Villefranche-sur-Saone";
                                }
                            ?>
                                <a class="link" href="/online-excursions/<?php echo ($cityBefore); ?>/">
                                    <span><?php echo ($item->city->name_ru); ?></span>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </section>
                <section class="list-tags js-list-tags">
                    <div class="container">
                        <div class="list-tags-wrap">
                            <a class="all active open-link-def link" data-link="/online-excursions">
                                <span>Все</span>
                            </a>
                            <?php foreach ($list as $item) {

                                // REPLACE CITY
                                $cityBefore = str_replace('é', 'e', $item->city->name_en);
                                $cityBefore = str_replace('ё', 'e', $cityBefore);
                                $cityBefore = str_replace("'", '', $cityBefore);
                                $cityBefore = str_replace("'", '', $cityBefore);
                                $cityBefore = str_replace("+", '-', $cityBefore);
                                $cityBefore = str_replace("+", '-', $cityBefore);
                                $cityBefore = str_replace(" ", '-', $cityBefore);
                                $cityBefore = str_replace(" ", '-', $cityBefore);
                                $cityBefore = str_replace("ó", 'o', $cityBefore);
                                if ($cityBefore == 'Villefranche-sur-Saône') {
                                    $cityBefore = "Villefranche-sur-Saone";
                                }
                            ?>
                                <div class="open-link-def link" data-link="/online-excursions/<?php echo ($cityBefore); ?>/">
                                    <span><?php echo ($item->city->name_ru); ?></span>
                                </div>
                            <?php } ?>
                            <div class="icon-open-list-tag">
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="24" height="24" viewBox="0 0 172 172" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,172v-172h172v172z" fill="none"></path>
                                        <g fill="#2ecc71">
                                            <path d="M150.5,79.6145v0c0,-9.5245 -10.61383,-15.20767 -18.54017,-9.92583l-45.95983,30.64467l-45.95983,-30.6375c-7.92633,-5.28183 -18.54017,0.39417 -18.54017,9.91867v0c0,3.98467 1.99233,7.71133 5.3105,9.92583l51.24167,34.15633c4.816,3.21067 11.08683,3.21067 15.90283,0l51.24167,-34.15633c3.311,-2.2145 5.30333,-5.934 5.30333,-9.92583z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </section>

    <section class="popular-tours tours">
        <div class="container">
            <div id="slick-tours" class="slick-tours row">
                <?php $count = 1 ?>
                <?php $countReviews = 0 ?>
                <?php foreach ($list as $item) {

                    // REPLACE CITY
                    $cityBefore = str_replace('é', 'e', $item->city->name_en);
                    $cityBefore = str_replace('ё', 'e', $cityBefore);
                    $cityBefore = str_replace("'", '', $cityBefore);
                    $cityBefore = str_replace("'", '', $cityBefore);
                    $cityBefore = str_replace("+", '-', $cityBefore);
                    $cityBefore = str_replace("+", '-', $cityBefore);
                    $cityBefore = str_replace(" ", '-', $cityBefore);
                    $cityBefore = str_replace(" ", '-', $cityBefore);
                    $cityBefore = str_replace("ó", 'o', $cityBefore);
                    if ($cityBefore == 'Villefranche-sur-Saône') {
                        $cityBefore = "Villefranche-sur-Saone";
                    }

                    // REPLACE COUNTRY
                    $countryBefore = str_replace('é', 'e', $item->city->country->name_en);
                    $countryBefore = str_replace('ё', 'e', $countryBefore);
                    $countryBefore = str_replace("'", '', $countryBefore);
                    $countryBefore = str_replace("'", '', $countryBefore);
                    $countryBefore = str_replace("+", '-', $countryBefore);
                    $countryBefore = str_replace("+", '-', $countryBefore);
                    $countryBefore = str_replace(" ", '-', $countryBefore);
                    $countryBefore = str_replace(" ", '-', $countryBefore);
                    $countryBefore = str_replace("ó", 'o', $countryBefore);
                ?>
                    <div class="slick-tours__item">
                        <div class="slick-tours__wrap">
                            <div class="slick-tours__item-img ">
                                <?php
                                $countImg = 0;
                                $arrayImg = [];
                                foreach ($item->photos as $img) {
                                    if ($countImg != 0 && $countImg <= 6) {
                                        array_push($arrayImg,  $img->thumbnail);
                                    }
                                    $countImg++;
                                }
                                ?>
                                <a class="link" href="/<?php echo ($countryBefore); ?>/<?php echo ($cityBefore); ?>/excursion-<?php echo ($item->id); ?>/" data-images="<?php echo htmlspecialchars(json_encode($arrayImg)) ?>">
                                    <img class="static lazyload" data-src="<?php echo $item->photos['0']->thumbnail ?>" alt="">
                                </a>
                                <?php if ($item->price->discount->value) { ?>
                                    <div class="slick-tours__item-img-box">
                                        <span>Скидка</span> <br>
                                        <span class="slick-tours__item-img-span "><?php echo ($item->price->discount->value * 100) ?>%</span>
                                    </div>
                                <?php } ?>
                                <?php if ($item->type == "group") { ?>
                                    <div class="slick-tours__tag">Групповая</div>
                                <?php } else if ($item->type == "private") { ?>
                                    <div class="slick-tours__tag">Индивидуальная</div>
                                <?php } else { ?>
                                <?php } ?>
                            </div>
                            <div class="item-time-rating">
                                <span class="item-time">
                                    <img class="lazyload" data-src="/assets/images/icon-time.png" alt=""> <span><?php echo $item->duration ?> </span>
                                </span>
                                <?php if ($item->rating) { ?>
                                    <span class="item-rating">
                                        <span style="display:none;" class="reviews-rating"><?php echo $item->rating ?> </span>
                                        <div class="star-rating-item">
                                            <span class="reviews-rating-img" style="width: <?php echo ($item->rating * 20) ?>%">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                            </span>
                                            <span class="reviews-rating-img bac">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star lazyload" data-src="/assets/images/icon-star-1.png" alt="">
                                            </span>
                                        </div>
                                    </span>
                                <?php } ?>
                            </div>
                            <div class="tours__item-content ">
                                <div class="item-title ">
                                    <a href="/<?php echo ($countryBefore); ?>/<?php echo ($cityBefore); ?>/excursion-<?php echo ($item->id); ?>/"><?php echo $item->title ?> </a>
                                </div>
                                <div class="item-price-guide">
                                    <div class="item-guide">
                                        <div class="item-guide-photo"> <img class="lazyload" data-src="<?php echo $item->guide->avatar->medium  ?>" alt=""> </div>
                                        <div class="item-guide-name">
                                            <span><?php echo $item->guide->first_name ?></span>
                                            <a class="red" href="/<?php echo ($countryBefore); ?>/<?php echo ($cityBefore); ?>/">Рим</a>
                                        </div>
                                    </div>

                                    <?php array_push($priceAll, $item->price->value); ?>
                                    <?php if ($item->rating) {
                                        $reviewsAll = $reviewsAll + $item->rating;
                                        $countReviews++;
                                    }; ?>
                                    <?php if ($item->review_count) {
                                        $reviewsAllCount = $reviewsAllCount + $item->review_count;
                                    }; ?>
                                    <div class="item-price">
                                        <div class="item-price-value"> <?php echo $item->price->value . ' ' . $item->price->currency ?></div>
                                        <div class="item-price-people"> <?php echo $item->price->unit_string  ?> </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php $count++ ?>
                <?php } ?>
            </div>
            <div class="load-tour" style="display: none;margin: 20px 0;text-align: center;"> <img style="width:35px;" src="/assets/images/2.gif" alt=""></div>
            <?php if ($urlNext) { ?>
                <button id="btn-more" class="btn-more more-text" data-url-next="<?php echo ($urlNext) ?>">Показать ещё... (<span class="text-span"></span> из <?php echo ($countCity); ?>)</button>
            <?php } ?>
        </div>
    </section>
    <div itemscope="itemscope" itemtype="http://schema.org/Product">
        <meta itemprop="name" content="<?php echo ("Авторские экскурсии" . $list[0]->city->in_obj_phrase); ?>">
        <noindex>
            <meta itemprop="description" content="🟢  Регулярные онлайн-экскурсии по всему миру с гидами. Новый формат проведения экскурсий с живой онлайн-трансляцией. Заказывай и смотри онлайн в удобной обстановке.">
            <span itemprop="offers" itemscope="itemscope" itemtype="http://schema.org/AggregateOffer">
                <meta itemprop="lowPrice" content="<?php echo (min($priceAll)) ?>">
                <meta itemprop="highPrice" content="<?php echo (max($priceAll)) ?>">
                <meta itemprop="priceCurrency" content="<?php echo ($list[0]->price->currency); ?>"></span>
        </noindex>
        <span itemprop="aggregateRating" itemscope="itemscope" itemtype="http://schema.org/AggregateRating">
            <?php if (($reviewsAll / $countReviews) > 0) { ?>
                <meta itemprop="ratingValue" content="<?php echo ($reviewsAll / $countReviews); ?>">
            <?php } ?>
            <?php if ($reviewsAllCount > 0) { ?>
                <meta itemprop="reviewCount" content="<?php echo ($reviewsAllCount); ?>">
            <?php } ?>
        </span>
    </div>
    <section class="video">
        <div class="container">
            <div class="border-box">
                <div class="advantages-wrap">
                    <div class="advantages-item">
                        <h3>Живые экскурсии с гидом</h3>
                        <div class="advantages-text">
                            Это живая экскурсии - не видео запись! Гид проводит экскурсию в формате вебинара или транслируя с улицы.
                        </div>
                    </div>
                    <div class="advantages-item">
                        <h3>Общение в прямом эфире</h3>
                        <div class="advantages-text">
                            Общайтесь с гидом и другими участниками, задавайте вопросы когда вам что-то интересно.
                        </div>
                    </div>
                    <div class="advantages-item">
                        <h3>Как участвовать?</h3>
                        <div class="advantages-text">
                            Экскурсия проходят в бесплатной программе Zoom. Можно подключиться через телефон, планшет или компьютер.
                        </div>
                    </div>
                    <div class="advantages-item">
                        <h3>Дополнительные материалы</h3>
                        <div class="advantages-text">
                            После экскурсии Вам будут оправлены дополнительные материалы: презентация, список книг, фильмов, статей, для лучшего изучения темы.
                        </div>
                    </div>
                    <div class="advantages-item">
                        <h3>Скидка на экскурсию гида</h3>
                        <div class="advantages-text">
                            После онлайн экскурсии вы получаете бессрочную разовую скидку на любую экскурсию гида. Воспользуйтесь скидкой, когда будет возможность путешествовать.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
        document.addEventListener("DOMContentLoaded", function() {
            var timeout = false;
            let coordinatesYT = window.pageYOffset;
            let coordinatesYB = coordinatesYT + window.innerHeight;
            let elements = document.querySelectorAll(".slick-tours__item-img ");
            let elementsArray = [];
            let currentElement;
            let urlNextListCity = $(".popular-tours .btn-more").data("url-next");
            let sliderTour;
            let xhrOne = null;
            $(".country-btn-wrap .btn-title").on("click", function() {
                $(".country-btn-wrap .btn-block").toggleClass("active");
            })
            if (window.innerWidth > 560) {
                initslidertour();
            } else {
                editElemsTour();
            }
            if ($(".popular-tours .btn-more").length) {
                $(".popular-tours .btn-more").on("click", function() {
                    $(".load-tour").show();
                    $(this).hide();
                    if (xhrOne !== null) {
                        xhrOne.abort();
                    };
                    xhrOne = null;
                    xhrOne = new XMLHttpRequest();
                    let data = null;
                    xhrOne.open('GET', urlNextListCity + "&format=json", true);
                    xhrOne.send();
                    xhrOne.onreadystatechange = function() {
                        if (xhrOne.readyState == 4) {
                            if (xhrOne.status == 200) {
                                data = jQuery.parseJSON(xhrOne.responseText);
                                addTours(data.results, data.next);
                                $(".load-tour").hide();
                                $(".tours .slick-tours__item").show();
                            }
                        }
                    };
                })
            }

            function replaceName(type, value) {
                switch (type) {
                    case "noEm":
                        let newStr1 = value.replace('<em>', '').replace('<em>', '').replace('</em>', '').replace('</em>', '');
                        return newStr1;
                        break;
                    case "noSpace":
                        let newStr2 = value.replace("_", "-").replace("_", "-").replace("+", "-").replace("+", "-").replace(" ", "-").replace(" ", "-").replace("é", "e").replace("ё", "e").replace("ó", "o").replace("Villefranche-sur-Saône", "Villefranche-sur-Saone");
                        return newStr2;
                        break;
                    case "cityCountry":
                        let newStr3 = value.replace('`', '').replace("'", "");
                        return newStr3;
                        break;
                    default:
                        break;
                }
            }

            function addTours(result, nextUrl) {
                result.map((item) => {
                    let country = replaceName("cityCountry", item.city.country.name_en);
                    let newCountry = replaceName("noSpace", country);
                    let city = replaceName("cityCountry", item.city.name_en);
                    let newCity = replaceName("noSpace", city);
                    let arrImages = [];
                    item.photos.map((img, index) => {
                        if (index < 7) {
                            arrImages.push(img.thumbnail);
                        }
                    });
                    arrImages.shift();
                    arrImages = JSON.stringify(arrImages);
                    let discount = "";
                    let tagName = "";
                    let ratingCount = "";
                    if (item.price.discount && item.price.discount.value) {
                        discount = `<div class="slick-tours__item-img-box"><span>Скидка</span> <br><span class="slick-tours__item-img-span ">${item.price.discount.value * 100}%</span>  </div>`;
                    }
                    if (item.type == "group") {
                        tagName = `<div class="slick-tours__tag">Групповая</div>`;
                    } else if (item.type == "private") {
                        tagName = `<div class="slick-tours__tag">Индивидуальная</div>`;
                    } else {}
                    if (item.rating) {
                        ratingCount = `<span class="item-rating"><span style="display:none;" class="reviews-rating">${item.rating}</span><div class="star-rating-item"><span class="reviews-rating-img" style="width: ${item.rating * 20}%"><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""></span><span class="reviews-rating-img bac"><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""><img class="icon-star " src="/assets/images/icon-star-1.png" alt=""></span></div></span>`;
                    }
                    $("#slick-tours").append(`<div style="display: none;" class="slick-tours__item"><div class="slick-tours__wrap"><div class="slick-tours__item-img "> <a class="link" href="/${newCountry}/${newCity}/excursion-${item.id}/" data-images='${arrImages}'><img class="static " src="${item.photos['0'].thumbnail}" alt=""></a>${discount} ${tagName}</div><div class="item-time-rating"><span class="item-time">  <img class="" src="/assets/images/icon-time.png" alt=""> <span>${item.duration}</span></span>${ratingCount}</div><div class="tours__item-content "><div class="item-title "><a href="/${newCountry}/${newCity}/excursion-${item.id}/">${item.title}</a></div><div class="item-price-guide"><div class="item-guide"><div class="item-guide-photo"> <img class="" src="${item.guide.avatar.medium}" alt=""> </div><div class="item-guide-name">${item.guide.first_name}<br></div></div><div class="item-price"><div class="item-price-value">${item.price.value} ${item.price.currency}</div><div class="item-price-people">${item.price.unit_string}</div></div></div></div></div></div>`);
                })

                if (nextUrl) {
                    urlNextListCity = nextUrl;
                    $(".popular-tours .btn-more").show();
                }
                initslidertour();
                if ($(".more-text.btn-more").length) {
                    $(".more-text.btn-more .text-span").text($(".tours .slick-tours__item").length)
                }
            }

            function editElemsTour() {
                elements.forEach(function(elem) {
                    if (!elem.classList.contains("hide")) {
                        elementsArray.push({
                            element: elem,
                            top: elem.getBoundingClientRect().top,
                            bottom: coordinatesYB - elem.getBoundingClientRect().bottom,
                            rate: 0
                        })
                    }
                })

                window.onscroll = function() {
                    if (timeout !== false) {
                        clearTimeout(timeout);
                    }
                    timeout = setTimeout(function() {
                        editCoordinates();
                    }, 100);
                };
                editCoordinates();

                function editCoordinates() {
                    coordinatesYT = window.pageYOffset;
                    coordinatesYB = coordinatesYT + window.innerHeight;

                    elementsArray.forEach(function(elem) {
                        elem.top = elem.element.getBoundingClientRect().top;
                        elem.bottom = coordinatesYB - elem.element.getBoundingClientRect().bottom;
                        elem.rate = calculateRate(elem.element.getBoundingClientRect(), elem.element);
                    })
                }

                function calculateRate(rect, item) {
                    let rateTop = rect.top + pageYOffset;
                    if (rateTop >= pageYOffset && rect.bottom + pageYOffset <= coordinatesYB) {
                        if (currentElement != item) {
                            edidVisual(item, true);
                            currentElement = item;
                        }
                    } else {
                        edidVisual(item, false);
                    }
                }

                function edidVisual(item, pause) {
                    if (pause) {
                        let urls = $(item).find(".link").data("images");
                        if (!$(item).find(".new-img").length) {
                            for (i = 0; i < urls.length; i++) {
                                $(item).find(".link").append('<img class="new-img" src="' + urls[i] + '" />');
                            }
                        }
                        if ($(item).find(".slick-track").length == 0) {
                            $(item).find(".link").on('init', function(event, slick) {
                                var initSlide = slick.slickCurrentSlide();
                                var slickDots = slick.$dots[0];
                                slickDots.childNodes[initSlide].classList.add("slick-current");
                            });
                            $(item).find(".link").on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                                var slickDots = slick.$dots[0];
                                slickDots.childNodes[currentSlide].classList.remove("slick-current");
                                slickDots.childNodes[nextSlide].classList.add("slick-current");
                            });
                            $(item).find(".link").slick({
                                arrows: false,
                                dots: true,
                                autoplay: true,
                                autoplaySpeed: 2000,
                                pauseOnHover: false,
                                pauseOnFocus: false,
                                fade: true,
                                cssEase: 'linear'
                            });
                        } else {
                            $(item).find(".link .slick-active").addClass("slick-current");
                            $(item).find(".link .slick-dots").css("opacity", "1");
                            $(item).find(".link").slick('slickPlay');
                        }
                    } else {
                        if ($(item).find(".slick-track").length) {
                            $(item).find(".link .slick-dots").css("opacity", "0");
                            $(item).find(".link .slick-active").removeClass("slick-current");
                            $(item).find(".link").slick('slickPause');
                        }
                    }
                }
            }

            function initslidertour() {
                if (window.innerWidth > 768) {
                    $(".slick-tours__item").hover(
                        function() {
                            let urls = $(this).find(".link").data("images");
                            if (!$(this).find(".new-img").length) {
                                for (i = 0; i < urls.length; i++) {
                                    $(this).find(".link").append('<img class="new-img" src="' + urls[i] + '" />');
                                }
                            }
                            if ($(this).find(".slick-track").length == 0) {
                                $(this).find(".link").on('init', function(event, slick) {
                                    var initSlide = slick.slickCurrentSlide();
                                    var slickDots = slick.$dots[0];
                                    slickDots.childNodes[initSlide].classList.add("slick-current");
                                });
                                $(this).find(".link").on('beforeChange', function(event, slick, currentSlide, nextSlide) {
                                    var slickDots = slick.$dots[0];
                                    slickDots.childNodes[currentSlide].classList.remove("slick-current");
                                    slickDots.childNodes[nextSlide].classList.add("slick-current");
                                });
                                $(this).find(".link").slick({
                                    arrows: false,
                                    dots: true,
                                    autoplay: true,
                                    autoplaySpeed: 2000,
                                    pauseOnHover: false,
                                    pauseOnFocus: false,
                                    fade: true,
                                    cssEase: 'linear'
                                });
                            } else {
                                $(this).find(".link .slick-active").addClass("slick-current");
                                $(this).find(".link").slick('slickPlay');
                                $(this).find(".link .slick-dots").css("opacity", "1");
                            }
                        },
                        function() {
                            $(this).find(".link .slick-active").removeClass("slick-current");
                            $(this).find(".link").slick('slickPause');
                            $(this).find(".link .slick-dots").css("opacity", "0");
                        }
                    );
                }
            }
        });
    </script>
    <?php
    include 'inc/footer.php';
    ?>