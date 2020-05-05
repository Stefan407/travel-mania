<?php
/*
Template Name: All-cities
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
?>
<?php

get_template_part('all-contry.php');
$list = [];
$listCountry = [];
getAllResults('https://experience.tripster.ru/api/cities/', $list);
getAllResults('https://experience.tripster.ru/api/countries/?format=json', $listCountry);

if (!function_exists('filter_function_name_Cities')) {
    add_filter('document_title_parts', 'filter_function_name_Cities');
    function filter_function_name_Cities($title)
    {

        $title['title'] = 'Авторские экскурсии в 600+ городах';
        $title['site'] = '';
        $title['page '] = '';
        $title['tagline '] = '';

        return $title;
    }
}
?>

<head>
    <?php wp_head(); ?>
    <meta name="keywords" content="экскурсии, все, города, направления, в городах, на русском, язык, выбрать, заказать, купить, забронировать, трэвэл, мания, travel, mania" />
    <meta name="description" content="Здесь можно выбрать город в котором хотите заказать экскурсию на русском языке от Тревел Мании!" />
</head>
<?php get_header(); ?>
<section class="top">
    <div class="top__slider">
        <div class="image">
            <img src="<?= home_url() ?>/wp-content/uploads/Main/Main-11.jpg" alt="">
        </div>
        <div class="top__slider-text">
            <div class="container">
                <div class="top__content-text">
                    <h1>Авторские экскурсии в 600+ городах</h1>
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
                <div class="breadcrumbs__block" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
                    <link itemprop="url" href="/all-cities/">
                    <p class="breadcrumbs__text">
                        <span itemprop="title">Все города</span>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-box">
            <h2>Экскурсии в 600+ городах мира</h2>
            <div class="border-box__text">
                <p>Travel Mania — экскурсионные предложения в 600+ городах из <a href="/all-countries/" class="azure-link">93 стран</a> мира. Все экскурсии авторские и безупречно продуманы гидами, которые их проводят. Вы можете подобрать следующие экскурсии: обзорные, исторические, гастрономические и шоппинг туры, экскурсии с детьми, а также спортивные и развлекательные поездки. Лучшие цены и тщательно составленные маршруты, о чем свидетельствуют более 140 000 отзывов гостей.</p>
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
    <div class="popular-cityes">
        <div class="container">
            <div class="chenge-border">
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
                            <button id="btn-rat"><span>По популярности</span>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 226 226" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,226v-226h226v226z" fill="none"></path>
                                        <g fill="#2ecc71">
                                            <path d="M196.15414,41.11869l-15.58503,-10.59375c-4.3122,-2.92008 -10.22026,-1.79958 -13.10637,2.47866l-76.39723,112.66046l-35.10878,-35.10878c-3.66707,-3.66707 -9.64303,-3.66707 -13.3101,0l-13.34405,13.34405c-3.66707,3.66707 -3.66707,9.64303 0,13.34406l53.98738,53.98738c3.02194,3.02193 7.77555,5.33083 12.05379,5.33083c4.27825,0 8.59044,-2.68239 11.3747,-6.72295l91.94832,-135.64754c2.92007,-4.27824 1.79958,-10.15235 -2.51262,-13.07241z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <button id="btn-al"><span>По алфавиту</span>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 226 226" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,226v-226h226v226z" fill="none"></path>
                                        <g fill="#2ecc71">
                                            <path d="M196.15414,41.11869l-15.58503,-10.59375c-4.3122,-2.92008 -10.22026,-1.79958 -13.10637,2.47866l-76.39723,112.66046l-35.10878,-35.10878c-3.66707,-3.66707 -9.64303,-3.66707 -13.3101,0l-13.34405,13.34405c-3.66707,3.66707 -3.66707,9.64303 0,13.34406l53.98738,53.98738c3.02194,3.02193 7.77555,5.33083 12.05379,5.33083c4.27825,0 8.59044,-2.68239 11.3747,-6.72295l91.94832,-135.64754c2.92007,-4.27824 1.79958,-10.15235 -2.51262,-13.07241z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                            <button id="btn-country"><span>По странам</span>
                                <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="26" height="26" viewBox="0 0 226 226" style=" fill:#000000;">
                                    <g fill="none" fill-rule="nonzero" stroke="none" stroke-width="1" stroke-linecap="butt" stroke-linejoin="miter" stroke-miterlimit="10" stroke-dasharray="" stroke-dashoffset="0" font-family="none" font-weight="none" font-size="none" text-anchor="none" style="mix-blend-mode: normal">
                                        <path d="M0,226v-226h226v226z" fill="none"></path>
                                        <g fill="#2ecc71">
                                            <path d="M196.15414,41.11869l-15.58503,-10.59375c-4.3122,-2.92008 -10.22026,-1.79958 -13.10637,2.47866l-76.39723,112.66046l-35.10878,-35.10878c-3.66707,-3.66707 -9.64303,-3.66707 -13.3101,0l-13.34405,13.34405c-3.66707,3.66707 -3.66707,9.64303 0,13.34406l53.98738,53.98738c3.02194,3.02193 7.77555,5.33083 12.05379,5.33083c4.27825,0 8.59044,-2.68239 11.3747,-6.72295l91.94832,-135.64754c2.92007,-4.27824 1.79958,-10.15235 -2.51262,-13.07241z"></path>
                                        </g>
                                    </g>
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div id="cityes" class="popular-cityes__wrap">
                    <?php $count = 1 ?>
                    <?php foreach ($list as $town) { ?>
                        <div id="item-element <?php echo str_replace('+', '-', urlencode($city_name)) ?>" class="item-element w-33 <?php if ($count > 24) { ?>hide<?php } ?>">
                            <?php
                            $city_name = str_replace('é', 'e', $town->name_en);
                            $city_name = str_replace('ё', 'e', $town->name_en);
                            $city_name = str_replace("'", '', $city_name);
                            $city_name = str_replace("ó", 'o', $city_name);
                            if ($city__name_en == 'Villefranche-sur-Saône') {
                                $city__name_en = "Villefranche-sur-Saone";
                            } ?>
                            <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', urlencode($town->country->name_en)) ?>/<?php echo str_replace('+', '-', urlencode($city_name)) ?>/">
                                <img src="<?php echo ($town->image->thumbnail)  ?>" alt="">
                                <div class="item-title-wrap">
                                    <div class="item-title search-element"><span class="name-title"><?php echo $town->name_ru ?></span></div>
                                    <span class="item-span">Экскурсий: <?php echo ($town->experience_count) ?> </span>
                                </div>
                            </a>
                        </div>
                        <?php $count++ ?>
                    <?php } ?>
                </div>
                <button id="btn-more" class="btn-more">Показать ещё... <span id="span-col">всего <?php echo (count($list)) ?></span></button>
                <div class="country-all-block-wrap">
                    <h2>Выберите страну для путешествия</h2>
                    <div class="country-all-block">
                        <?php foreach ($listCountry as $country) { ?>
                            <div class="search-element ">
                                <div>
                                    <a style="display:flex;" class="links-country" data-url-country="<?= home_url() ?>/<?php echo str_replace('+', '-', urlencode($country->name_en)) ?>/">
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
    </div>
    <div class="video">
        <div class="container">
            <div class="border-box">
                <div class="video-box">
                    <h2> Весь мир за одну минуту</h2>
                    <video controls="controls" playsinline poster="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/move-img.png">
                        <source src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/video/MOVE.mp4" type="video/webm">
                        <source src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/video/MOVE.mp4" type="video/mp4">
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
    </div>
</section>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
<script>
    $(".country-btn-wrap .btn-title").on("click", function() {
        $(".country-btn-wrap .btn-block").toggleClass("active");
    })
    var search = document.querySelector("#cityes");
    var searchChild = document.querySelector("#cityes").innerHTML;

    document.getElementById("btn-rat").onclick = function() {
        $(".country-btn-wrap .btn-title span").html(document.querySelector("#btn-rat span").innerHTML);
        $(".country-btn-wrap .btn-block").removeClass("active");
        document.querySelector(".country-all-block-wrap").style.display = "none";
        document.querySelector(".chenge-border").classList.remove("border-box-no-center");
        document.querySelector("#btn-more").style.display = "flex";
        document.querySelector("#cityes").style.display = "flex";
        document.getElementById("btn-al").classList.remove("active");
        document.getElementById("btn-country").classList.remove("active");
        document.getElementById("btn-rat").classList.add("active");
        document.querySelector("#cityes").innerHTML = searchChild;

    }
    document.getElementById("btn-al").onclick = function() {
        $(".country-btn-wrap .btn-title span").html(document.querySelector("#btn-al span").innerHTML);
        $(".country-btn-wrap .btn-block").removeClass("active");
        document.getElementById("btn-al").classList.add("active");
        document.getElementById("btn-rat").classList.remove("active");
        document.getElementById("btn-country").classList.remove("active");
        document.querySelector(".country-all-block-wrap").style.display = "none";
        document.querySelector(".chenge-border").classList.remove("border-box-no-center");
        document.querySelector("#btn-more").style.display = "flex";
        document.querySelector("#cityes").style.display = "flex";
        var items = document.querySelectorAll('.item-element');
        Array.from(items).sort(function(a, b) {
            a = a.querySelector('span.name-title').innerText.toLowerCase()
            b = b.querySelector('span.name-title').innerText.toLowerCase()
            return (a > b) - (a < b)
        }).forEach(function(n, i) {
            n.style.order = i
        })
    }
    document.getElementById("btn-country").onclick = function() {
        $(".country-btn-wrap .btn-title span").html(document.querySelector("#btn-country span").innerHTML);
        $(".country-btn-wrap .btn-block").removeClass("active");
        document.getElementById("btn-al").classList.remove("active");
        document.getElementById("btn-rat").classList.remove("active");
        document.getElementById("btn-country").classList.add("active");
        document.querySelector(".chenge-border").classList.add("border-box-no-center");
        document.querySelector(".country-all-block-wrap").style.display = "block";
        document.querySelector("#btn-more").style.display = "none";
        document.querySelector("#cityes").style.display = "none";
    }

    var allCountries = document.querySelector(".country-all-block");
    Array.apply(null, allCountries.querySelectorAll(".search-element"))
        .sort(function(a, b) {
            a = a.querySelector("div:last-child > a").text;
            b = b.querySelector("div:last-child > a").text;
            return a < b ? -1 : a > b ? 1 : 0
        })
        .forEach(function(a) {
            allCountries.appendChild(a)
        });


    $("#btn-rat").trigger("click");

    if ($(".popular-cityes__wrap .item-element").length > 24) {
        $(".popular-cityes .btn-more").css("display", "block");

    } else {
        $(".popular-cityes .btn-more").css("display", "none");
    }
    let showElensVisual = 48;
    $(".popular-cityes .btn-more").on("click", function() {
        let elems = $(".popular-cityes__wrap .item-element");
        let length = $(".popular-cityes__wrap .item-element").length;
        if (showElensVisual > length) {
            showElem(showElensVisual, true)
        } else {
            showElem(showElensVisual, false)
        }
        showElensVisual = showElensVisual + 24;
    })
    $(".country-all-block .search-element a").click(function(e) {
        location.href = $(this).data("url-country");
    })

    function showElem(count, btn) {
        let elems = $(".popular-cityes__wrap .item-element");
        if (count) {
            for (i = 1; i < count; i++) {
                if ($(elems[i]).length) {
                    elems[i].classList.remove("hide");
                }
            }
        }
        if (btn) {
            $(".popular-cityes .btn-more").css("display", "none");
        }
    }

    $('.image').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
</script>
<?php get_footer(); ?>