<?php
// TITLE PAGE
$my_var = $list->title;
$arr = explode(' ', $my_var);
for ($i = 0; $i <= count($arr); $i++) {
    $arr[$i] = str_replace("-", "", $arr[$i]);
    $arr[$i] = str_replace(" ", "", $arr[$i]);
    if (mb_strlen($arr[$i]) <= 2) {
        unset($arr[$i]);
    }
}
$new_str = implode(", ", $arr);
$page_title =  $my_var . " 2021 🥇 цена, отзывы, описание • Travel Mania";

// LIST TOURS
$listTour = getData('https://experience.tripster.ru/api/experiences/?city=' . $list->city->id);
$listTourNew = $listTour->results;

// REPLACE CITY
$city_name = str_replace('é', 'e', $city__name_en);
$city_name = str_replace('ё', 'e', $city_name);
$city_name = str_replace("'", '', $city_name);
$city_name = str_replace("'", '', $city_name);
$city_name = str_replace(" ", '-', $city_name);
$city_name = str_replace(" ", '-', $city_name);
$city_name = str_replace("+", '-', $city_name);
$city_name = str_replace("+", '-', $city_name);
$city_name = str_replace("_", '-', $city_name);
$city_name = str_replace("_", '-', $city_name);
$city_name = str_replace("ó", 'o', $city_name);
if ($city_name == 'Villefranche-sur-Saône') {
    $city_name = "Villefranche-sur-Saone";
}
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
        gtag('config', 'AW-629196382');
    </script>
    <!-- Event snippet for Бронь дата conversion page
In your html page, add the snippet and call gtag_report_conversion when someone clicks on the chosen link or button. -->
<script>
function gtag_report_conversion(url) {
  var callback = function () {
    if (typeof(url) != 'undefined') {
      window.location = url;
    }
  };
  gtag('event', 'conversion', {
      'send_to': 'AW-629196382/x-lFCN6h6OABEN6Mg6wC',
      'event_callback': callback
  });
  return false;
}
</script>

    <link rel="icon" href="https://travel-mania.org/favicon.ico" type="image/x-icon">
    <link rel="profile" href="https://gmpg.org/xfn/11">
    <title><?php echo ($page_title); ?></title>
    <meta name="keywords" content="<?php echo ($new_str); ?>, <?php echo ($list->city->country->name_ru); ?>, 2021, травел, мания, travel, mania" />
    <meta name="description" content="<?php echo ($list->tagline); ?>" />

    <link rel='stylesheet' type='text/css' href='/assets/css/jquery.fancybox.min.css?v=5.6' />
    <?php
    include 'inc/head-static.php';
    ?>

    <script type="text/javascript" src="/assets/js/jquery.fancybox.min.js" defer></script>

</head>

<body class="tours">
    <?php
    include 'inc/header.php';
    ?>
    <div class="bg-cal"></div>
    <section class="main excursion-page" style="padding-top:0px" data-id-excursion="<?php echo ($list->id) ?>" data-url-tripster="<?php echo $list->url ?>">
        <div class="container">
            <div class="main_wrap">
                <div class="row">
                    <div class="main_content col-12 col-md-7 col-lg-8">
                        <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                            <div class="breadcrumbs-wrap">
                                <div class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <div class="breadcrumbs__block">
                                        <a class="breadcrumbs__link" href="/<?php echo ($country__name_en) ?>/" itemprop="item">
                                            <span itemprop="name"><?php echo ($list->city->country->name_ru) ?></span>
                                        </a>
                                    </div>
                                    <div class="breadcrumbs__arrow">
                                        <img class="lazyload" data-src="/assets/images/arrow-bread.png" alt="">
                                    </div>
                                    <meta itemprop="position" content="1">
                                </div>
                                <div class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                    <div class="breadcrumbs__block">
                                        <a class="breadcrumbs__link" href="/<?php echo ($country__name_en) ?>/<?php echo ($city_name) ?>/" itemprop="item">
                                            <span itemprop="name">Экскурсии <?php echo ($list->city->in_obj_phrase) ?></span>
                                        </a>
                                    </div>
                                    <meta itemprop="position" content="2">
                                </div>
                            </div>
                        </div>
                        <div itemscope itemtype="http://schema.org/Product">
                            <meta itemprop="name" content="<?php echo ($page_title) ?>" />
                            <meta itemprop="description" content="<?php echo ($list->tagline) ?>" />
                            <meta itemprop="image" content="<?php echo $list->photos[0]->medium ?>" />
                            <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                                <meta itemprop="price" content="<?php echo $list->price->value ?> " />
                                <meta itemprop="priceCurrency" content="<?php echo $list->price->currency ?>" />
                            </span>
                            <span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                                <?php if ($list->rating > 0) { ?>
                                    <meta itemprop="ratingValue" content="<?php echo ($list->rating) ?>" />
                                <?php } ?>
                                <?php if ($list->review_count > 0) { ?>
                                    <meta itemprop="reviewCount" content="<?php echo ($list->review_count) ?>" />
                                <?php } ?>
                            </span>
                        </div>
                        <div class="main_content-title">
                            <h1> <?php echo ($list->title) ?> </h1>
                        </div>
                        <div class="slider-tours-photo">
                            <?php foreach ($list->photos as $photo) { ?>
                                <img class="lazyload" data-src='<?php echo $photo->medium ?>'>
                            <?php } ?>
                        </div>
                        <div class="main_content-description">
                            <div class="description-item">
                                <div class="row">
                                    <div class="description-content col-12">
                                        <div class="description-content-text">
                                            <div class="description ">
                                                <?php echo $list->description; ?>
                                            </div>
                                            <div class="main_gallery">
                                                <div class="gallery-img">
                                                    <div class="first-block">
                                                        <a href="<?php echo $list->photos[0]->medium ?>" data-fancybox="images" data-caption="My caption">
                                                            <img class="lazyload" data-src='<?php echo $list->photos[0]->thumbnail ?>'>
                                                        </a>
                                                    </div>
                                                    <div class="second-block">
                                                        <?php $indexPhotoSecond = 0 ?>
                                                        <?php foreach ($list->photos as $photo) { ?>
                                                            <?php if ($indexPhotoSecond > 0) { ?>
                                                                <a href="<?php echo $photo->medium ?>" data-fancybox="images" data-caption="My caption" data-length="+<?php echo (count($list->photos) - 3) ?>">
                                                                    <img class="lazyload" data-src='<?php echo $photo->thumbnail ?>'>
                                                                </a>
                                                            <?php } ?>
                                                            <?php $indexPhotoSecond++ ?>
                                                        <?php } ?>
                                                    </div>
                                                </div>
                                            </div>
                                <div class="container-calendar" style="display: none;">
                                <h2 class="tit_cal" style="text-align: center; margin-bottom:40px;display: none;"></h2>
                                <svg class="close-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                    <path d="M4.293,18.293,10.586,12,4.293,5.707A1,1,0,0,1,5.707,4.293L12,10.586l6.293-6.293a1,1,0,1,1,1.414,1.414L13.414,12l6.293,6.293a1,1,0,1,1-1.414,1.414L12,13.414,5.707,19.707a1,1,0,0,1-1.414-1.414Z" /></svg>
                                <div class="container-calendar-item">
                                    <h3 id="monthAndYear"></h3>
                                    <div class="button-container-calendar">
                                        <button id="previous" style="display:none;">&#8249;</button>
                                        <button id="next">&#8250;</button>
                                    </div>

                                    <table class="table-calendar" id="calendar" data-lang="en">
                                        <thead id="thead-month"></thead>
                                        <tbody id="calendar-body"></tbody>
                                    </table>
                                    <div class="legend">
                                        <div class="legend-item busy">День занят</div>
                                        <div class="legend-item available">День свободен</div>
                                    </div>

                                    <div class="footer-container-calendar">
                                        <label for="month">Jump To: </label>
                                        <select id="month" onchange="jump()">
                                            <option value=0>Jan</option>
                                            <option value=1>Feb</option>
                                            <option value=2>Mar</option>
                                            <option value=3>Apr</option>
                                            <option value=4>May</option>
                                            <option value=5>Jun</option>
                                            <option value=6>Jul</option>
                                            <option value=7>Aug</option>
                                            <option value=8>Sep</option>
                                            <option value=9>Oct</option>
                                            <option value=10>Nov</option>
                                            <option value=11>Dec</option>
                                        </select>
                                        <select id="year" onchange="jump()"></select>
                                    </div>
                                </div>
                                <div class="btn-order-wrap">
                                    <div class="btn-click" data-link="" onclick="yaCounter56569540.reachGoal('bron-data'); gtag_report_conversion();">Заказать</div>
                                    </br>
                                    <div class="text">Для заказа выберите дату</div>
                                </div>
                            </div>
                                            <div class="guide des">
                                                <div class="guide-left">
                                                    <img class="lazyload" data-src="<?php echo $list->guide->avatar->medium ?>" alt="">
                                                </div>
                                                <div class="guide-right">
                                                    <div class="text-guid">
                                                        <h3 style="text-align: center; ">Гид <?php echo $list->guide->first_name ?></h3><?php echo $list->guide->description ?>
                                                    </div>
                                                    <div class="btn-guid">Подробнее...</div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="expage-dates-list"></div>
                                    </div>
                                </div>
                                <div class="order-panel-wrap">
                                    <div class="panel-title">Забронировать</div>
                                    <div class="description-item">
                                        <div class="description-string"> <span>Длительность</span> <span><?php echo $list->duration ?> часа(ов)</span> </div>
                                        <div class="description-string " id="child-string"> <span>Дети</span> <span id="child-span"><?php if ($list->child_friendly == 1) { ?> Можно с детьми <?php } else { ?>Без детей <?php } ?></span> </div>
                                        <div class="description-string"> <span>Размер группы </span> <span>до <?php echo $list->max_persons ?> человек</span> </div>
                                        <?php if ($list->rating != 0) { ?>
                                            <div class="star-rating-wrap">
                                                <span>Рейтинг </span>
                                                <span id="star-value"><?php echo $list->rating ?></span>
                                                <div class="star-rating-item">
                                                    <span class="reviews-rating-img" style="width: <?php echo ($list->rating * 20) ?>%">
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
                                            </div>
                                        <?php } ?>
                                        <div class="price-item price-item-disc">
                                            <?php if ($list->price->discount->original_price) { ?>
                                                <div id="panel-old-price" class="panel-old-price">
                                                    <?php echo $list->price->discount->original_price ?> <?php echo $list->price->currency ?>
                                                </div>
                                            <?php } ?>
                                            <div class="panel-price">
                                                <span class="span-price"><?php echo $list->price->value ?> <?php echo $list->price->currency ?></span>
                                                <span class="span-people">(<?php echo $list->price->unit_string ?> )</span>
                                            </div>
                                            <?php if ($list->price->discount->original_price) { ?>
                                                <div class="price-discount">
                                                    <span id="price-discount-value">
                                                        <?php echo ($list->price->discount->value * 100) ?>
                                                    </span>
                                                    <span>%</span> Скидка при заказе до <span id="discount-date"><?php echo ($list->price->discount->expiration_date) ?></span>
                                                </div>
                                            <?php } ?>
                                        </div>
                                    </div>
                                    <span class="order-item">
                                        <div class="order-item-string"><img class="lazyload" data-src="/assets/images/lightning.svg"> Быстрое бранирование </div>
                                        <div class="order-item-string"><img class="lazyload" data-src="/assets/images/warranty-icon.svg"> Гарантия лучшей цены </div>
                                        <div>
                                            <div class="panel-btns">
                                                <div> <a class="order-btn more-btn" target="_blank" onclick="yaCounter56569540.reachGoal('data1')">Заказать </a> </div>
                                                <div> <a class="more-btn" style="display: none;" target="_blank" onclick="yaCounter56569540.reachGoal('data2');">Выбрать дату </a> </div>
                                                <div> <a class="order-ask open-link" target="_blank" onclick="yaCounter56569540.reachGoal('vopros'); gtag('config', 'AW-629196382');" data-link="https://experience.tripster.ru/experience/booking/<?php echo ($list->id) ?>/?exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link&utm_term=guide">Задать вопрос гиду</a> </div>
                                            </div>
                                    </span>
                                </div>
                            </div>
                            <div class="description-content-text">
                                <div class="guide mob">
                                    <div class="guide-left">
                                        <img class="lazyload" data-src="<?php echo $list->guide->avatar->medium ?>" alt="">
                                        <h3>Гид <?php echo $list->guide->first_name ?> </h3>
                                    </div>
                                    <div class="guide-right">
                                        <div class="text-guid"><?php echo $list->guide->description ?> </div>
                                        <div class="btn-guid">Подробнее...</div>
                                    </div>
                                </div>
                            </div>
                            <?php if ($reviewsList) { ?>
                                <div id="description-item-reviews">
                                    <div class="row">
                                        <div class="description-content col-12">
                                            <div class="description-title ">
                                                <h2>Отзывы</h2>
                                                <p class="description-section_text">*написать отзыв могут только посетившие экскурсию гости</p>
                                            </div>
                                            <?php foreach ($reviewsList as $rew) { ?>
                                                <div class=" description-content-text-reviews ">
                                                    <div class="reviews-photo ">
                                                        <img class="reviews-photo-img lazyload" data-src="/assets/images/user-icon-3.png" alt="">
                                                    </div>
                                                    <div class="reviews-box">
                                                        <div class="reviews-title">
                                                            <div class="name"><span><?php echo $rew->name  ?></span>
                                                                <span class="reviews-date"><?php echo $rew->created_on ?></span>
                                                            </div>
                                                            <div class="star-rating-item">
                                                                <span class="reviews-rating-img" style="width: <?php echo ($rew->rating * 20) ?>%">
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
                                                        </div>
                                                        <div class="reviews-text">"<?php echo $rew->text  ?>"</div>
                                                    </div>
                                                </div>
                                            <?php }  ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="load-tour" style="display: none;margin: 20px 0;text-align: center;"> <img style="width:35px;" src="/assets/images/2.gif" alt=""></div>
                                <?php if ($urlNext) { ?>
                                    <button onclick="yaCounter56569540.reachGoal('vse-otzivi');" id="btn-more" class="more-text btn-more-add-reviews" data-url-next="<?php echo ($urlNext) ?>">Показать ещё... (<span class="text-span"></span> из <?php echo ($countCity); ?>)</button>
                                <?php } ?>
                            <?php } ?>

                        </div>
                    </div>
                </div>
                <div class="order-panel  col-12 col-md-5 col-lg-4">
                    <div class="order-panel-wrap">
                        <div class="panel-title"> - Забронировать - </div>
                        <div class="description-item">
                            <div class="description-string"> <span>Длительность</span> <span><?php echo $list->duration ?> часа(ов)</span> </div>
                            <div class="description-string " id="child-string"> <span>Дети</span> <span id="child-span"><?php if ($list->child_friendly == 1) { ?> Можно с детьми <?php } else { ?>Без детей <?php } ?></span> </div>
                            <div class="description-string"> <span>Размер группы </span> <span>до <?php echo $list->max_persons ?> человек</span> </div>
                            <?php if ($list->rating != 0) { ?>
                                <div class="star-rating-wrap">
                                    <span>Рейтинг </span>
                                    <span id="star-value"><?php echo $list->rating ?></span>
                                    <div class="star-rating-item">
                                        <span class="reviews-rating-img" style="width: <?php echo ($list->rating * 20) ?>%">
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
                                </div>
                            <?php } ?>
                            <div class="price-item price-item-disc">
                                <?php if ($list->price->discount->original_price) { ?>
                                    <div id="panel-old-price" class="panel-old-price">
                                        <?php echo $list->price->discount->original_price ?> <?php echo $list->price->currency ?>
                                    </div>
                                <?php } ?>
                                <div class="panel-price">
                                    <span class="span-price"><?php echo $list->price->value ?> <?php echo $list->price->currency ?></span>
                                    <span class="span-people">(<?php echo $list->price->unit_string ?> )</span>
                                </div>
                                <?php if ($list->price->discount->original_price) { ?>
                                    <div class="price-discount">
                                        <span id="price-discount-value">
                                            <?php echo ($list->price->discount->value * 100) ?>
                                        </span>
                                        <span>%</span> Скидка при заказе до <span id="discount-date"><?php echo ($list->price->discount->expiration_date) ?></span>
                                    </div>
                                <?php } ?>
                            </div>
                        </div>
                        <span class="order-item">
                            <div class="order-item-string"><img class="lazyload" data-src="/assets/images/lightning.svg"> Быстрое бранирование </div>
                            <div class="order-item-string"><img class="lazyload" data-src="/assets/images/warranty-icon.svg"> Гарантия лучшей цены </div>
                            <div>
                                <div class="panel-btns">
                                    <div> <a class="more-btn order-btn" target="_blank" onclick="yaCounter56569540.reachGoal('data1');">Заказать </a> </div>
                                    <div> <a class="more-btn" style="display: none;" target="_blank" onclick="yaCounter56569540.reachGoal('data2');">Выбрать дату </a> </div>
                                    <div> <a class="order-ask open-link" target="_blank" onclick="yaCounter56569540.reachGoal('vopros'); gtag('config', 'AW-629196382');" data-link="https://experience.tripster.ru/experience/booking/<?php echo ($list->id) ?>/?exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link&utm_term=guide">Задать вопрос гиду</a> </div>
                                </div>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <div class="fixed-section order-panel-wrap" style="display: none;">
        <div> <a class="more-btn order-btn" target="_blank" onclick="yaCounter56569540.reachGoal('data1');">Заказать </a> </div>
        <div> <a class="order-ask open-link" target="_blank" onclick="yaCounter56569540.reachGoal('vopros'); gtag('config', 'AW-629196382');" data-link="https://experience.tripster.ru/experience/booking/<?php echo ($list->id) ?>/?exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link&utm_term=guide">Вопрос гиду</a> </div>
        <div> <a class="more-btn" target="_blank" onclick="yaCounter56569540.reachGoal('data2');">Выбрать дату </a> </div>
    </div>
    <?php
    if ($listTour->count > 1) { ?>
        <section class="popular-tours slider-tour">
            <div class="container">
                <div class="popular-tours-text">
                    <div>
                        <h2>Популярные экскурсии <?php echo ($list->city->in_obj_phrase); ?></h2>
                    </div>
                    <div class="slick-tours slider">
                        <?php foreach ($listTourNew as $tour) {
                            if ($tour->id != $list->id) { ?>
                                <div class="slick-tours__item" style="background-color:#fff;">
                                    <div class="slick-tours__wrap">
                                        <div class="slick-tours__item-img">
                                            <a class="link" href="/<?php echo str_replace('+', '-', $country__name_en) ?>/<?php echo ($city_name); ?>/excursion-<?= $tour->id ?>/" data-images="<?php echo htmlspecialchars(json_encode($arrayImg)) ?>">
                                                <img class="static lazyload" data-src="<?php echo $tour->photos['0']->thumbnail ?>" alt="">
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
                                                <a href="/<?php echo str_replace('+', '-', str_replace(' ', '-', $country__name_en)) ?>/<?php echo ($city_name); ?>/excursion-<?= $tour->id ?>/">
                                                    <?= $tour->title ?>
                                                </a>
                                            </div>
                                            <div class="item-price-guide">
                                                <div class="item-guide">
                                                    <div class="item-guide-photo"> <img class="lazyload" data-src="<?php echo $tour->guide->avatar->medium  ?>" alt=""> </div>
                                                    <div class="item-guide-name"><?php echo $tour->guide->first_name ?> <br>
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
                        <?php }
                        } ?>
                    </div>
                </div>
            </div>
        </section>
    <?php } ?>
    <div class="link-all-ex">
        <a href="/<?php echo ($country__name_en) ?>/<?php echo ($city_name) ?>/">Все экскурсии <?php echo ($list->city->in_obj_phrase); ?></a>
    </div>
    <script>
        document.addEventListener("DOMContentLoaded", () => {
            let urlNextListCity = $(".btn-more-add-reviews").data("url-next");
            let xhrOne = null;


            if ($(".slick-tours .slick-tours__item").length > 3) {
                $('.slick-tours.slider').slick({
                    prevArrow: '<button type="button" class="slick-prev slick-btn" ><img src="/assets/images/arrow-icon.png" alt=""></button>',
                    nextArrow: '<button type="button" class="slick-next slick-btn" ><img src="/assets/images/arrow-icon.png" alt=""></button>',
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
            } else {
                $(".slick-tours .slick-tours__item").css({
                    "margin": "10px 0"
                })
            }



            if ($(".btn-more-add-reviews").length) {
                $(".btn-more-add-reviews").on("click", function() {
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
                                addReviews(data.results, data.next);
                                $(".load-tour").hide();
                            }
                        }
                    };
                })
            }

            function addReviews(result, nextUrl) {
                result.map((item) => {
                    $("#description-item-reviews .description-content").append(`<div class="description-content-text-reviews">
                                                    <div class="reviews-photo ">
                                                        <img class="reviews-photo-img lazyloaded" data-src="/assets/images/user-icon-3.png" alt="" src="/assets/images/user-icon-3.png">
                                                    </div>
                                                    <div class="reviews-box">
                                                        <div class="reviews-title">
                                                            <div class="name"><span>${item.name}</span>
                                                                <span class="reviews-date">02.08.2020</span>
                                                            </div>
                                                            <div class="star-rating-item">
                                                                <span class="reviews-rating-img" style="width: ${item.rating * 20}%">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                </span>
                                                                <span class="reviews-rating-img bac">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                    <img class="icon-star lazyloaded" data-src="/assets/images/icon-star-1.png" alt="" src="/assets/images/icon-star-1.png">
                                                                </span>
                                                            </div>
                                                        </div>
                                                        <div class="reviews-text">${item.text}</div>
                                                    </div>
                                                </div>`);
                })
                if (nextUrl) {
                    urlNextListCity = nextUrl;
                    $(".btn-more-add-reviews").show();
                }
                if ($(".btn-more-add-reviews .text-span").length) {
                    $(".btn-more-add-reviews .text-span").text($(".description-content-text-reviews").length)
                }
            }
            if ($(".btn-more-add-reviews .text-span").length) {
                $(".btn-more-add-reviews .text-span").text($(".description-content-text-reviews").length)
            }

        });
    </script>
    <?php
    include 'inc/footer.php';
    ?>