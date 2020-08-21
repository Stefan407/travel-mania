<!DOCTYPE html>
<html lang="ru-RU">
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
<body>
<?php
include 'inc/header.php';
?>
<section class="top">
    <div class="top__slider">
        <div class="image-top_slider">
            <img class="lazyload" data-src="/uploads/Main/Main-11.jpg" alt="">
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
                    <a href="/<?php echo str_replace(" ", "-", str_replace('+', '-', $city->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($city->name_en)) ?>/">
                        <img class="lazyload" data-src="<?php echo ($city->image->thumbnail)  ?>" alt="">
                        <div class="item-title-wrap">
                            <div class="item-title"><?php echo $city->name_ru ?></div>
                            <span class="item-span">Экскурсий: <?php echo ($city->experience_count) ?> </span>
                        </div>
                    </a>
                </div>
            <?php } ?>
        </div>
        <div class="popular-cityes__links">
            <a href="/all-cities/"> ВСЕ ГОРОДА</a>
            <a href="/all-countries/"> ВСЕ СТРАНЫ</a>
        </div>
    </div>
</section>
<section class="popular-tours slider-tour">
    <div class="container">
        <div class="popular-tours-text">
            <div>
                <h2>Онлайн экскурсии с гидом</h2>
            </div>
            <div class="slick-tours">
                <?php foreach ($list as $tour) { ?>
                    <div class="slick-tours__item" style="background-color:#fff;">
                        <div class="slick-tours__wrap">
                            <div class="slick-tours__item-img">
                                <a class="link" href="/<?php echo str_replace('+', '-', $tour->city->country->name_en) ?>/<?php echo str_replace('+', '-', urlencode($tour->city->name_en)) ?>/excursion-<?= $tour->id ?>/" data-images="<?php echo htmlspecialchars(json_encode($arrayImg)) ?>">
                                    <img class="lazyload static" data-src="<?php echo $tour->photos['0']->thumbnail ?>" alt="">
                                </a>
                                <?php if ($tour->price->discount->value) { ?>
                                    <div class="slick-tours__item-img-box">
                                        <span>Скидка</span> <br>
                                        <span class="slick-tours__item-img-span "><?php echo ($tour->price->discount->value * 100) ?>%</span>
                                    </div>
                                <?php } ?>
                                <?php if ($tour->tags[0]->name) { ?>
                                    <div class="slick-tours__tag"><?php echo ($tour->tags[0]->name) ?></div>
                                <?php } ?>
                            </div>

                            <div class="item-time-rating">
                                <span class="item-time">
                                    <img class="lazyload" data-src="/assets/images/icon-time.png" alt=""> <span><?php echo $tour->duration ?> </span>
                                </span>
                                <?php if ($tour->rating) { ?>
                                    <span class="item-rating">
                                        <span style="display:none;" class="reviews-rating"><?php echo $tour->rating ?> </span>
                                        <div class="star-rating-item">
                                            <span class="reviews-rating-img" style="width: <?php echo ($tour->rating * 20) ?>%">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                            </span>
                                            <span class="reviews-rating-img bac">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                                <img class="lazyload icon-star" data-src="/assets/images/icon-star-1.png" alt="">
                                            </span>
                                        </div>
                                    </span>
                                <?php } ?>
                            </div>
                            <div class="tours__item-content ">
                                <div class="item-title ">
                                    <a href="/<?php echo str_replace('+', '-', str_replace(' ', '-', $tour->city->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($tour->city->name_en)) ?>/excursion-<?= $tour->id ?>/">
                                        <?= $tour->title ?>
                                    </a>
                                </div>
                                <div class="item-price-guide">
                                    <div class="item-guide">
                                        <div class="item-guide-photo"> <img data-src="<?php echo $tour->guide->avatar->medium  ?>" alt=""> </div>
                                        <div class="item-guide-name">
                                            <span>
                                                <?php echo $tour->guide->first_name ?>
                                            </span>
                                            <a><?= $tour->city->name_ru ?></a>
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
                        <video controls="controls" playsinline poster="/assets/images/move-img.png">
                            <source class="lazyload" data-src="/assets/video/MOVE.mp4" type="video/webm">
                            <source class="lazyload" data-src="/assets/video/MOVE.mp4" type="video/mp4">
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
<?php
include 'inc/footer.php';
?>
