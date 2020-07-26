<?php
/*
Template Name: City-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/

$des_cities_path = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/lz-computer-repair/description/des-city.json';
$des_cities = file_get_contents($des_cities_path);
$des_cities = json_decode($des_cities);

$current_city = $list[0]->city->name_en;
$current_city = str_replace(" ", "-", $current_city);

$current_des_cities = array_filter($des_cities, function ($city) use ($current_city) {
    return $city->name == $current_city;
});
$current_des_city = reset($current_des_cities);



$my_var = $list[0]->city->in_obj_phrase;

$page_title =  "Авторские экскурсии " . $my_var . " на русском языке 2020 - цены и описание Travel Mania";
add_action('pre_get_document_title', function () use ($page_title) {
    return $page_title;
});

add_action('wp_head', function () use ($list) {
    echo '<meta name="keywords" content="экскурсии, ' . $list[0]->city->name_ru . ', русский, на русском, гиды, авторские, эксклюзивные, исторические, обзорные, пешеходные, на автобусе, купить, заказать, забронировать, цена, недорого, дешево, скидка, описание, список, прайс, травэл, мания, travel, mania" />';
    echo '<meta name="description" content="У нас можно заказать авторские экскурсии ' . $list[0]->city->in_obj_phrase . ' на русском языке с лучшими гидами. Выгодные цены без посредников и удобные даты проведения." />';
});

get_header();


?>
<section class="top">
    <div class="top__slider">
        <div id="top-images-city" class="image <?php echo ($current_des_city->images) ?>">
            <?php if ($current_des_city->images != "") : ?>
                <?php $indexImg = 0; ?>
                <?php foreach ($current_des_city->images as $imgUrls) {
                    if ($indexImg == 0) { ?>
                        <img style="opacity:0" src="<?php echo ($imgUrls) ?>" alt="">
                    <?php } else { ?>
                        <img style="opacity:0; display:none" src="<?php echo ($imgUrls) ?>" alt="">
                <?php }
                    $indexImg++;
                } ?>
            <?php else : ?>
                <img style="opacity:0" src="<?= home_url() ?>/wp-content/uploads/Main/Zaglushka-1-min.jpg" alt="">
                <img style="opacity:0" src="<?= home_url() ?>/wp-content/uploads/Main/Zaglushka-2-min.jpg" alt="">
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
    <div class="breadcrumbs">
        <div class="container breadcrumbs-wrap">
            <div class="breadcrumbs-item">
                <div class="breadcrumbs__block" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a class="breadcrumbs__link" href="/" itemprop="url" title="Главная">
                        <span itemprop="title">
                            <span>Главная</span>
                        </span>
                    </a>
                </div>
                <div class="breadcrumbs__arrow">
                    <img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
                </div>
            </div>
            <div class="breadcrumbs-item">
                <div class="breadcrumbs__block" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
                    <a class="breadcrumbs__link" href="/<?= str_replace('+', '-', $country__name_en) ?>/" itemprop="url">
                        <span itemprop="title"><?php echo ($list[0]->city->country->name_ru) ?></span>
                    </a>
                </div>
                <div class="breadcrumbs__arrow">
                    <img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
                </div>
            </div>
            <div class="breadcrumbs-item">
                <div class="breadcrumbs__block" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <link itemprop="url" href="/<?= str_replace('+', '-', $country__name_en) ?>/<?= str_replace('+', '-', $city__name_en) ?>/">
                    <p class="breadcrumbs__text">
                        <span itemprop="title"><?php echo ($list[0]->city->name_ru) ?></span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-box">
            <h2>Экскурсии <?php echo ($list[0]->city->in_obj_phrase); ?> на русском языке</h2>
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

<section class="popular-tours tours">
    <div class="container">
        <div id="slick-tours" class="slick-tours row">
            <?php $count = 1 ?>
            <?php foreach ($list as $country) { ?>
                <div id="slick-tours__item" class="slick-tours__item <?php if ($count > 24) { ?>hide<?php } ?>">
                    <div class="slick-tours__wrap">
                        <div class="slick-tours__item-img">
                            <?php
                            $countImg = 0;
                            $arrayImg = [];
                            foreach ($country->photos as $img) {
                                if ($countImg != 0 && $countImg <= 6) {
                                    array_push($arrayImg,  $img->thumbnail);
                                }
                                $countImg++;
                            }
                            ?>
                            <a class="link" href="<?= home_url() ?>/<?= str_replace('+', '-', $country__name_en) ?>/<?= str_replace('+', '-', $city__name_en) ?>/excursion-<?= $country->id; ?>/" data-images="<?php echo htmlspecialchars(json_encode($arrayImg)) ?>">
                                <img class="static" src="<?php echo $country->photos['0']->thumbnail ?>" alt="">
                            </a>
                            <?php if ($country->price->discount->value) { ?>
                                <div class="slick-tours__item-img-box">
                                    <span>Скидка</span> <br>
                                    <span class="slick-tours__item-img-span "><?php echo ($country->price->discount->value * 100) ?>%</span>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="item-time-rating">
                            <span class="item-time">
                                <img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-time.png" alt=""> <span><?php echo $country->duration ?> </span>
                            </span>
                            <span class="item-rating">
                                <span style="display:none;" class="reviews-rating"><?php echo $country->rating ?> </span>
                                <div class="star-rating-item">
                                    <span class="reviews-rating-img" style="width: <?php echo ($country->rating * 20) ?>%">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                    </span>
                                </div>
                            </span>

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
                                <a href="<?= home_url() ?>/<?= str_replace('+', '-', $country__name_en) ?>/<?= str_replace('+', '-', $city__name_en) ?>/excursion-<?= $country->id; ?>/"><?php echo $country->title ?> </a>
                            </div>
                            <div class="item-price-guide">
                                <div class="item-guide">
                                    <div class="item-guide-photo"> <img src="<?php echo $country->guide->avatar->medium  ?>" alt=""> </div>
                                    <div class="item-guide-name"><?php echo $country->guide->first_name ?> <br>
                                        <?php
                                        $city_name = str_replace('é', 'e', $country->name_en);
                                        $city_name = str_replace("'", '', $city_name);
                                        ?>
                                        <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', $country__name_en) ?>/<?php echo str_replace('+', '-', urlencode($country->city->name_en)) ?>/"><?php echo $country->city->name_ru ?></a>
                                    </div>
                                </div>
                                <div class="item-price">
                                    <div class="item-price-value"> <?php echo $country->price->value . ' ' . $country->price->currency ?></div>
                                    <div class="item-price-people"> <?php echo $country->price->unit_string  ?> </div>
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
                    <video controls="controls" playsinline poster="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/TRAVEL-MANIA-EXMP.png">
                        <source src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/video/TRAVEL-MANIA-EXMP.mp4" type="video/webm">
                        <source src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/video/TRAVEL-MANIA-EXMP.mp4" type="video/mp4">
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
<link rel="stylesheet" type="text/css" href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/slick.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/jquery.appear.js"></script>


<script>
    function slideFunc() {
        $("#top-images-city img").css({
            "opacity": "1",
            "display": "block"
        });
        $('.image').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000
        });
    }
    setTimeout(slideFunc, 1000);

    $(document).ready(function() {
        initslidertour();
    });

    var timeout = false;
    let coordinatesYT = window.pageYOffset;
    let coordinatesYB = coordinatesYT + window.innerHeight;
    let elements = document.querySelectorAll(".slick-tours__item");
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

            // var observableElements = [];

            // if (document.querySelector('.slick-tours__item')) {
            //     let itemsTours = $('.slick-tours__item');
            //     for (i = 0; i < itemsTours.length; i++) {
            //         observableElements.push(itemsTours[i]);
            //     }
            // }

            // if ("IntersectionObserver" in window) {
            //     let animationObserver = new IntersectionObserver(function(entries, observer) {
            //         entries.forEach(function(entry) {
            //             console.log(entry.intersectionRatio)
            //             if (entry.isIntersecting) {
            //                 let urls = $(entry.target).find(".link").data("images");
            //                 if (!$(entry.target).find(".new-img").length) {
            //                     for (i = 0; i < urls.length; i++) {
            //                         $(entry.target).find(".link").append('<img class="new-img" src="' + urls[i] + '" />');
            //                     }
            //                 }
            //                 if ($(entry.target).find(".slick-track").length == 0) {
            //                     $(entry.target).find(".link").on('init', function(event, slick) {
            //                         var initSlide = slick.slickCurrentSlide();
            //                         var slickDots = slick.$dots[0];
            //                         slickDots.childNodes[initSlide].classList.add("slick-current");
            //                     });
            //                     $(entry.target).find(".link").on('beforeChange', function(event, slick, currentSlide, nextSlide) {
            //                         var slickDots = slick.$dots[0];
            //                         slickDots.childNodes[currentSlide].classList.remove("slick-current");
            //                         slickDots.childNodes[nextSlide].classList.add("slick-current");
            //                     });
            //                     $(entry.target).find(".link").slick({
            //                         arrows: false,
            //                         dots: true,
            //                         autoplay: true,
            //                         autoplaySpeed: 2000,
            //                         pauseOnHover: false,
            //                         pauseOnFocus: false,
            //                     });
            //                 } else {
            //                     $(entry.target).find(".link .slick-active").addClass("slick-current");
            //                     $(entry.target).find(".link .slick-dots").css("opacity", "1");
            //                     $(entry.target).find(".link").slick('slickPlay');
            //                 }
            //             } else {
            //                 if ($(entry.target).find(".slick-track").length) {
            //                     $(entry.target).find(".link .slick-dots").css("opacity", "0");
            //                     $(entry.target).find(".link .slick-active").removeClass("slick-current");
            //                     $(entry.target).find(".link").slick('slickPause');
            //                 }
            //             }
            //         });
            //     });

            //     observableElements.forEach(function(observableElement) {
            //         animationObserver.observe(observableElement);
            //     });
            // } else {
            //     observableElements.forEach(function(observableElement) {});
            // }
        }
    }

    // let reviewsRatings = document.getElementsByClassName("reviews-rating");
    // let reviewsRatingImg = document.getElementsByClassName("reviews-rating-img");


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
    // for (i = 0; i < reviewsRatings.length; i++) {
    //     reviewsRatingImg[i].style.width = reviewsRatings[i].innerHTML * 20 + "%";
    // }
</script>

<?php get_footer(); ?>