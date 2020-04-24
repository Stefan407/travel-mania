﻿    <?php
    $page_title =  "Авторские экскурсии по всему миру — Travel Mania";
    add_action('pre_get_document_title', function () use ($page_title) {
        return $page_title;
    });

    add_action('wp_head', function () use ($list) {
        echo '<meta name="keywords" content="экскурсии, авторские, эксклюзивные, пешеходные, обзорные, исторические, на русском языке, купить, заказать, забронировать, гиды, мир, цены, недорого, дешево, лучшие, выгодно, без посредников, 2020, тревел, мания, travel, mania" />';
        echo '<meta name="description" content="Организация и онлайн продажа авторских экскурсий на русском языке по всему миру. Выгодные цены и большой выбор в 2020 году от Тревел Мании." />';
    });
    ?>
    <?php get_header(); ?>
    <section class="top">
        <div class="top__slider">
            <div class="image">
                <img src="<?= home_url() ?>/wp-content/uploads/Main/Main-11.jpg" alt="">
            </div>
            <div class="top__slider-text">
                <div class="container">
                    <div class="top__content-text">
                        <h1>Авторские экскурсии по всему миру</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="border-box">
                <h2>Экскурсии по всему миру на русском языке</h2>
                <div class="border-box__text">
                <p>От чего в жизни можно получать положительные эмоции, новые знания, драйв и удовольствие? Только поездки в новые места, города и страны дают весь спектр этих эмоций. Хорошо организованное, тщательно спланированное путешествие оставляет приятное послевкусие, которое остается с Вами надолго. Если Вы путешествуете и хотите забронировать необычную экскурсию в этом регионе, проект Travel Mania предлагает авторские экскурсионные предложения.</p>
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
        </div>
    </section>

    <section class="popular-cityes">
        <div class="container">
            <div class="popular-cityes__wrap">
                <?php foreach ($list1 as $city) { ?>
                    <div class="item-element item-element-home">
                        <a href="<?= home_url() ?>/<?php echo str_replace(" ", "-", str_replace('+', '-', $city->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($city->name_en)) ?>/">
                            <img src="<?php echo ($city->image->thumbnail)  ?>" alt="">
                            <div class="item-title-wrap">
                                <div class="item-title"><?php echo $city->name_ru ?></div>
                                <span class="item-span">Экскурсий: <?php echo ($city->experience_count) ?> </span>
                            </div>
                        </a>
                    </div>
                <?php } ?>
            </div>
            <div class="popular-cityes__links">
                <a href="<?= home_url() ?>/all-cities/"> ВСЕ ГОРОДА</a>
                <a href="<?= home_url() ?>/all-countries/"> ВСЕ СТРАНЫ</a>
            </div>
        </div>
    </section>

    <section class="popular-tours slider-tour">
        <div class="container">
            <div class="popular-tours-text">
                <div>
                    <h2>Самые популярные экскурсии</h2>
                </div>
                <div class="slick-tours">
                    <?php foreach ($list as $tour) { ?>
                        <div class="slick-tours__item" style="background-color:#fff;">
                            <div class="slick-tours__wrap">
                                <div class="slick-tours__item-img">
                                    <a class="link" href="<?= home_url() ?>/<?php echo str_replace('+', '-', $tour->city->country->name_en) ?>/<?php echo str_replace('+', '-', urlencode($tour->city->name_en)) ?>/excursion-<?= $tour->id ?>/" data-images="<?php echo htmlspecialchars(json_encode($arrayImg)) ?>">
                                        <img class="static" src="<?php echo $tour->photos['0']->thumbnail ?>" alt="">
                                    </a>
                                    <?php if ($tour->price->discount->value) { ?>
                                        <div class="slick-tours__item-img-box">
                                            <span>Скидка</span> <br>
                                            <span class="slick-tours__item-img-span "><?php echo ($tour->price->discount->value * 100) ?>%</span>
                                        </div>
                                    <?php } ?>
                                </div>

                                <div class="item-time-rating">
                                    <span class="item-time">
                                        <img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-time.png" alt=""> <span><?php echo $tour->duration ?> </span>
                                    </span>
                                    <span class="item-rating">
                                        <span style="display:none;" class="reviews-rating"><?php echo $tour->rating ?> </span>
                                        <div class="star-rating-item">
                                            <span class="reviews-rating-img" style="width: <?php echo ($tour->rating * 20) ?>%">
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
                                        <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', str_replace(' ', '-', $tour->city->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($tour->city->name_en)) ?>/excursion-<?= $tour->id ?>/">
                                            <?= $tour->title ?>
                                        </a>
                                    </div>
                                    <div class="item-price-guide">
                                        <div class="item-guide">
                                            <div class="item-guide-photo"> <img src="<?php echo $tour->guide->avatar->medium  ?>" alt=""> </div>
                                            <div class="item-guide-name">
                                                <span>
                                                    <?php echo $tour->guide->first_name ?>
                                                </span>
                                                <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', str_replace(' ', '-', $tour->city->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($tour->city->name_en)) ?>/">
                                                    <?= $tour->city->name_ru ?>
                                                </a>
                                            </div>
                                        </div>
                                        <div class="item-price">
                                            <div class="item-price-value"> <?= $tour->price->value . ' ' . $tour->price->currency ?></div>
                                            <div class="item-price-people"> <?= $tour->price->unit_string  ?> </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
                <section class="video">
                    <h2>600+ городов в 93 странах</h2>
                    <p>Travel Mania охватывает более <a href="/all-cities/" class="azure-link">600 городов</a> в <a href="/all-countries/" class="azure-link">93 странах</a> мира. У нас можно подобрать: исторические экскурсии, гастрономические и шоппинг туры, экскурсии с детьми, а также спортивные и развлекательные поездки. Предлагаются тысячи эксклюзивных и авторских экскурсий, которые можно забронировать и оплатить онлайн. Только самые продуманные маршруты и выгодные цены, о чем свидетельствуют более 140 000 отзывов.</p> 
                    <div class="video-box">
                        <h2>Мир за одну минуту</h2>
                        <div class="video__text">
                            <img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/move-img.png" class="img-click-video">
                            <video controls="controls">
                                <source src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/video/MOVE.mp4" type="video/webm">
                                <source src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/video/MOVE.mp4" type="video/mp4">
                            </video>
                            <p class="autor">
                                Видео: <a href="/go/?url=https://vimeo.com/27246366" target="_blank">Rick Mereki</a>
                            </p>
                        </div>
                        <p>Путешествуя с Travel Mania, Вы откроете самые удивительные места нашей планеты! У Вас есть возможность познать новые страны и города, увидеть известные архитектурные памятники и красоту природы, узнать историю этих мест, особенности менталитета местных жителей, попробовать местную кухню и услышать истории о людях, прославивших эту землю. Выбирайте страну, город, смотрите все актуальные экскурсии и бронируйте понравившееся предложение.</p>
                    </div>
                </section>
            </div>
        </div>
    </section>
    <?php get_footer(); ?>

    <script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
    <script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/jquery.appear.js"></script>

    <script>
        if ($(".img-click-video").length && window.innerWidth < 500) {
            var myVideo = document.querySelector(".video-box video");
            $(".img-click-video").show();
            $(".img-click-video").click(function() {
                $(".img-click-video").hide();
                myVideo.play();
            })
        }
        // let reviewsRatings = document.getElementsByClassName("reviews-rating");
        // let reviewsRatingImg = document.getElementsByClassName("reviews-rating-img");
        // for (i = 0; i < reviewsRatings.length; i++) {
        //     reviewsRatingImg[i].style.width = reviewsRatings[i].innerHTML * 20 + "%";
        // }


        $('.image').slick({
            arrows: false,
            dots: true,
            autoplay: true,
            autoplaySpeed: 3000
        });
        $('.slick-tours').slick({
            prevArrow: '<button type="button" class="slick-prev slick-btn" ><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/arrow-icon.png" alt=""></button>',
            nextArrow: '<button type="button" class="slick-next slick-btn" ><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/arrow-icon.png" alt=""></button>',
            dots: false,
            slidesToShow: 3,
            slidesToScroll: 1,
            responsive: [{
                    breakpoint: 1000,
                    settings: {
                        slidesToShow: 2,
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 1,
                    }
                }
            ]

        });
    </script>