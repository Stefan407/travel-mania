<!DOCTYPE html>
<html lang="ru-RU" class="no-js no-svg">
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

<head>
    <link rel="icon" href="https://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title>Экскурсии во Франции на русском языке 2020 🥇 цены и описание - Travel Mania 🥇</title>
    <meta name="keywords" content="экскурсии, Франция , русский, на русском, гиды, 2020 авторские, эксклюзивные, исторические, обзорные, пешеходные, на автобусе, купить, заказать, забронировать, цена, недорого, дешево, скидка, описание, список, прайс, травэл, мания, travel, mania" />
    <meta name="description" content="✅ Групповые и индивидуальные экскурсии во Франции с интересными и харизматичными гидами. Быстрое бронирование всех экскурсий по актуальным ценам 2020 года. Перед заказом любой экскурсии можно задать вопрос гиду на сайте. У нас собраны лучшие экскурсии во Франции, которые тщательно продуманы и составлены гидами." />
    <link rel="icon" href="https://travel-mania.org/wp-content/uploads/2019/05/cropped-Logo-32x32.png" sizes="32x32" />
    <link rel="apple-touch-icon" href="https://travel-mania.org/wp-content/uploads/2019/05/cropped-Logo-180x180.png" />
    <meta name="msapplication-TileImage" content="https://travel-mania.org/wp-content/uploads/2019/05/cropped-Logo-270x270.png" />

    <link rel="preload" as="style" type="text/css" href="/assets/css/slick.min.css?v=0.6" onload="this.rel='stylesheet'">
    <link rel="preload" as="style" type="text/css" href="/assets/css/simplebar.min.css?v=0.6" onload="this.rel='stylesheet'">
    <link rel='stylesheet' href='/style.css?v=0.6' type='text/css' media='all' />

    <script type='text/javascript' src='/assets/js/jquery.min.js?v=0.6'></script>
    <script type="text/javascript" src="/assets/js/jquery.fancybox.min.js?v=0.6" defer></script>
    <script type="text/javascript" src="/assets/js/simplebar.min.js?v=0.6" defer></script>
    <script type="text/javascript" src="/assets/js/lazysizes.min.js?v=0.6" defer></script>
    <script type="text/javascript" src="/assets/js/slick.min.js?v=0.6" defer></script>
    <script type="text/javascript" src="/assets/js/main.js?v=0.6" defer></script>

</head>

<?php
$des_countries_path = $_SERVER['DOCUMENT_ROOT'] . '/description/des-country.json';
$des_countries = file_get_contents($des_countries_path);
$des_countries = json_decode($des_countries);

$current_country = $list[0]->country->name_en;
$current_country = str_replace(" ", "-", $current_country);

$current_des_countries = array_filter($des_countries, function ($country) use ($current_country) {
    return $country->name == $current_country;
});
$current_des_country = reset($current_des_countries); 

$tag_listTags = getData('https://experience.tripster.ru/api/citytags/?city=' . $tag_list[0]->city->id);
$tag_listTagsNew = $tag_listTags->results;
?>

<body>
    <section class="top">
        <div class="top__slider">
            <div id="top-images-city" class="image-top_slider <?php echo ($current_des_city->images) ?>">
                <?php if ($current_des_city->images != "") : ?>
                    <?php $indexImg = 0; ?>
                    <?php foreach ($current_des_city->images as $imgUrls) {
                        if ($indexImg == 0) { ?>
                            <img src="<?php echo ($imgUrls) ?>" alt="">
                        <?php }
                        $indexImg++; ?>
                    <?php }  ?>
                <?php else : ?>
                    <img style="opacity:0" src="/wp-content/uploads/Main/Zaglushka-1-min.jpg" alt="">
                    <img style="opacity:0" src="/wp-content/uploads/Main/Zaglushka-2-min.jpg" alt="">
                <?php endif; ?>
            </div>
            <div class="top__slider-text">
                <div class="container">
                    <div class="top__content-text">
                        <h1>Авторские экскурсии <?php echo ($list[0]->city->in_obj_phrase); ?></h1>
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
                        <img src="/assets/images/arrow-bread.png" alt="">
                    </div>
                </div>
                <div class="breadcrumbs-item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <div class="breadcrumbs__block">
                        <a class="breadcrumbs__link" href="/<?= str_replace('+', '-', $country__name_en) ?>/" itemprop="item">
                            <span itemprop="name"><?php echo ($list[0]->city->country->name_ru) ?></span>
                            <meta itemprop="position" content="2">
                        </a>
                    </div>
                    <div class="breadcrumbs__arrow">
                        <img src="/assets/images/arrow-bread.png" alt="">
                    </div>
                </div>
                <div class="breadcrumbs-item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <div class="breadcrumbs__block">
                        <meta itemprop="item" content="/<?= str_replace('+', '-', $country__name_en) ?>/<?= str_replace('+', '-', $city__name_en) ?>/">
                        <p class="breadcrumbs__text">
                            <span itemprop="name"><?php echo ($list[0]->city->name_ru) ?></span>
                        </p>
                        <meta itemprop="position" content="3">
                    </div>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="border-box">
                <h2>Экскурсии <?php echo ($list[0]->city->in_obj_phrase);
                                echo ($textRu); ?></h2>
                <div id="top-text-city" class="border-box__text">
                    <?php if ($current_des_city->textTop != "") : ?>
                        <?php echo $current_des_city->textTop; ?>
                        <?php else : ?>Travel Mania предлагает авторские экскурсии <?php echo ($list[0]->city->in_obj_phrase); ?> на русском языке. Каждый желающий может подобрать подходящую экскурсию, как групповую, так и индивидуальную и забронировать на удобную дату.
                    <?php endif; ?>
                </div>
                <div class="advantages-wrap">
                    <div class="advantages-item">
                        <h3>Онлайн бронирование</h3>
                        <div class="advantages-text">Выберете город, подберите экскурсию и сделайте бронь на удобную дату</div>
                    </div>
                    <div class="advantages-item">
                        <h3>Консультация с гидом</h3>
                        <div class="advantages-text">До оплаты экскурсии обсудите с гидом подробности и задайте любые вопросы</div>
                    </div>
                    <div class="advantages-item">
                        <h3>Оплачивайте только 20%</h3>
                        <div class="advantages-text">При бронировании оплачивается только 20% картой, остальную сумму платите гиду при встрече</div>
                    </div>
                </div>
            </div>
            <div style="display:none;" id="type-page">city</div>
            <div style="opacity:0" id="city-name"><?php echo ($list[0]->city->name_en); ?> </div>
        </div>
    </section>
    <section class="list-tags">
    <?php foreach ($tag_listTagsNew as $item) { ?>
        <?php var_dump($item); ?>
        <div class="list-item"><a href="/<?= str_replace('+', '-', $country__name_en) ?>/<?= str_replace('+', '-', $city__name_en) ?>/tag-<?php echo $tag_list[0]->city->id; ?>:<?php echo($item->slug); ?>/"><?php echo($item->name); ?></a></div>
    <? }?>
    </section>

    <section class="popular-tours tours">
        <div class="container">
            <div id="slick-tours" class="slick-tours row">
                <?php $count = 1 ?>
                <?php $countReviews = 0 ?>
                <?php foreach ($list as $item) { ?>
                    <div id="slick-tours__item " class="slick-tours__item <?php if ($count > 24) { ?>hide<?php } ?>">
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
                                <a class="link" href="/<?= str_replace('+', '-', $country__name_en) ?>/<?= str_replace('+', '-', $city__name_en) ?>/excursion-<?= $item->id; ?>/" data-images="<?php echo htmlspecialchars(json_encode($arrayImg)) ?>">
                                    <img class="static" src="<?php echo $item->photos['0']->thumbnail ?>" alt="">
                                </a>
                                <?php if ($item->price->discount->value) { ?>
                                    <div class="slick-tours__item-img-box">
                                        <span>Скидка</span> <br>
                                        <span class="slick-tours__item-img-span "><?php echo ($item->price->discount->value * 100) ?>%</span>
                                    </div>
                                <?php } ?>
                                <?php if ($item->tags[0]->name) { ?>
                                    <div class="slick-tours__tag"><?php echo ($item->tags[0]->name) ?></div>
                                <?php } ?>
                            </div>
                            <div class="item-time-rating">
                                <span class="item-time">
                                    <img src="/assets/images/icon-time.png" alt=""> <span><?php echo $item->duration ?> </span>
                                </span>
                                <?php if ($item->rating) { ?>
                                    <span class="item-rating">
                                        <span style="display:none;" class="reviews-rating"><?php echo $item->rating ?> </span>
                                        <div class="star-rating-item">
                                            <span class="reviews-rating-img" style="width: <?php echo ($item->rating * 20) ?>%">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                            </span>
                                            <span class="reviews-rating-img bac">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                                <img class="icon-star" src="/assets/images/icon-star-1.png" alt="">
                                            </span>
                                        </div>
                                    </span>
                                <?php } ?>

                            </div>
                            <div class="tours__item-content ">
                                <div class="item-title ">
                                    <?php
                                    $city_name = str_replace('é', 'e', $town->name_en);
                                    $city_name = str_replace('ё', 'e', $town->name_en);
                                    $city_name = str_replace("'", '', $city_name);
                                    $city_name = str_replace("ó", 'o', $city_name);
                                    if ($city__name_en == 'Villefranche-sur-Saône') {
                                        $city__name_en = "Villefranche-sur-Saone";
                                    }
                                    ?>
                                    <a href="/<?= str_replace('+', '-', $country__name_en) ?>/<?= str_replace('+', '-', $city__name_en) ?>/excursion-<?= $item->id; ?>/"><?php echo $item->title ?> </a>
                                </div>
                                <div class="item-price-guide">
                                    <div class="item-guide">
                                        <div class="item-guide-photo"> <img src="<?php echo $item->guide->avatar->medium  ?>" alt=""> </div>
                                        <div class="item-guide-name"><?php echo $item->guide->first_name ?> <br>
                                            <?php
                                            $city_name = str_replace('é', 'e', $item->name_en);
                                            $city_name = str_replace("'", '', $city_name);
                                            ?>
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
            <button id="btn-more" class="btn-more">Показать ещё... <span id="span-col">всего <?php echo (count($list)) ?></span> </button>
        </div>
    </section>
    <div itemscope="itemscope" itemtype="http://schema.org/Product">
        <meta itemprop="name" content="<?php echo ("Авторские экскурсии" . $list[0]->city->in_obj_phrase); ?>">
        <meta itemprop="description" content="✅ Групповые и индивидуальные экскурсии <?php echo ($list[0]->city->in_obj_phrase); ?> с интересными и харизматичными гидами. Быстрое бронирование всех экскурсий по актуальным ценам 2020 года. Перед заказом любой экскурсии можно задать вопрос гиду на сайте. У нас собраны лучшие экскурсии <?php echo ($list[0]->city->in_obj_phrase); ?>, которые тщательно продуманы и составлены гидами.">
        <span itemprop="offers" itemscope="itemscope" itemtype="http://schema.org/aggregateoffer">
            <meta itemprop="lowprice" content="<?php echo (min($priceAll)) ?>">
            <meta itemprop="highprice" content="<?php echo (max($priceAll)) ?>">
            <meta itemprop="pricecurrency" content="<?php echo ($list[0]->price->currency); ?>"></span>
        <span itemprop="aggregaterating" itemscope="itemscope" itemtype="http://schema.org/aggregaterating">
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
                <h2>Главные экскурсионные места <?php echo ($list[0]->city->in_obj_phrase); ?></h2>
                <div class="video-box">
                    <div id="video-text-city" class="video__text">
                        <?php if ($current_des_city->textButton != "") {
                            echo ($current_des_city->textButton);
                        } else { ?>
                            В ближайшие время мы подготовим детальное описание главных экскурсионных маршрутов <?php echo ($list[0]->city->in_obj_phrase); ?>.
                        <?php } ?>
                    </div>
                </div>
                <h2>Как забронировать экскурсию</h2>
                <div class="video-box">
                    <div>
                        <p>Забронировать экскурсии <?php echo ($list[0]->city->in_obj_phrase); ?> поможет наш видиопример. Перед тем, как Вы определитесь с тематикой экскурсии и выбирите удобную дату, можно задать любой вопрос гиду. Посмотрите видео и узнайте все наши приемущества.</p>
                        <video controls="controls" playsinline poster="/assets/images/TRAVEL-MANIA-EXMP.png">
                            <source src="/assets/video/TRAVEL-MANIA-EXMP.mp4" type="video/webm">
                            <source src="/assets/video/TRAVEL-MANIA-EXMP.mp4" type="video/mp4">
                        </video>
                        <p class="autor">
                            Видео: © Travel Mania
                        </p>
                    </div>
                    <div class="video__text">
                        <p>Бронирование происходит через сайт, при этом Вы общаетесь напрямую с гидом и можете задать ему любые вопросы. Вам не нужно ничего оплачивать, пока Вы не проясните важные для себя детали.</p>
                    </div>
                </div>
            </div>

    </section>

    <script>
        function slideFunc() {
            $("#top-images-city img").css({
                "opacity": "1",
                "display": "block"
            });
        }
        setTimeout(slideFunc, 1000);

        $(document).ready(function() {
            initslidertour();
        });

        var timeout = false;
        let coordinatesYT = window.pageYOffset;
        let coordinatesYB = coordinatesYT + window.innerHeight;
        let elements = document.querySelectorAll(".slick-tours__item-img ");
        let elementsArray = [];
        let currentElement;

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
            if (window.innerWidth > 500) {
                $(".slick-tours__item").hover(function(e) {
                        e = this;
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
                    function(e) {
                        e = this;
                        $(this).find(".link .slick-active").removeClass("slick-current");
                        $(this).find(".link").slick('slickPause');
                        $(this).find(".link .slick-dots").css("opacity", "0");
                    });
            } else {
                editElemsTour();
            }
        }


        if ($(".slick-tours__item").length > 24) {
            $(".popular-tours .btn-more").css("display", "block");

        } else {
            $(".popular-tours .btn-more").css("display", "none");
        }
        let showElensVisual = 48;
        $(".popular-tours .btn-more").on("click", function() {
            let elems = $(".slick-tours__item");
            let length = $(".slick-tours__item").length;
            if (showElensVisual > length) {
                showElem(showElensVisual, true)
                initslidertour();
            } else {
                showElem(showElensVisual, false)
                initslidertour();
            }
            showElensVisual = showElensVisual + 24;
        })

        function showElem(count, btn) {
            let elems = $(".slick-tours__item");
            if (count) {
                for (i = 1; i < count; i++) {
                    if ($(elems[i]).length) {
                        elems[i].classList.remove("hide");
                    }
                }
            }
            if (btn) {
                $(".popular-tours .btn-more").css("display", "none");
            }
        }
    </script>
</body>

</html>