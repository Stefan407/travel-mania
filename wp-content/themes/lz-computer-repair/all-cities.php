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
getAllResults('https://experience.tripster.ru/api/cities/', $list);

if (!function_exists('filter_function_name_Cities')) {
    add_filter('document_title_parts', 'filter_function_name_Cities');
    function filter_function_name_Cities($title)
    {

        $title['title'] = 'Авторские экскурсии в городах';
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
    <meta name="description" content="Здесь можно выбрать город, в котором хотите заказать экскурсию на русском языке от Тревел Мании!" />
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
                    <h1>Авторские экскурсии в городах</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs">
        <div class="container breadcrumbs-wrap">
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
    <div class="container">
        <div class="border-box">
            <h2>Авторские экскурсии в 561 городе — Travel Mania</h2>
            <div class="border-box__text">
                Каждый путешественник изучает окружающий мир по-своему.
                Кто-то любит читать книги и путеводители по городам,
                а потом приехать в пункт назначения и самостоятельно изучить
                все достопримечательности и интересные места.
                Кто-то любит чтобы его везде отвезли, всё показали
                и всё рассказали. Неизменным остаётся одно - жажда
                знаний и непреодолимая тяга к новому интересному и интригующему.
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
                    <div class="advantages-text">На сайте оплачиваете только 20% картой, остальную сумму гиду при встрече</div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="main">
    <section class="popular-cityes">
        <div class="container">
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
                        }?>
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
        </div>
    </section>
    <section class="video">
        <div class="container">
            <div class="border-box">
                <h2>Главные экскурсионные направления Travel Maniа</h2>
                <p>Инициатором акции стал фонд швейцарско-канадского кинематографиста и путешественника Бернарда Вебера при поддержке ЮНЕСКО. Бернард Вебер известен по фильму "Отель "Локарно", который он снял вместе с Федерико Феллини, а также по ряду книг ("Дыхание Богов", "Муравьи"), которые стали популярны по всему миру. В течение двух лет желающие со всего света могли проголосовать за любимые архитектурные постройки.</p>
                <p>Среди претендентов на почетное место в списке чудес света было 77 архитектурных памятников, лишь один из которых был из России: "Собор Василия Блаженного / Московский Кремль" - именно так было указано в голосовании. Однако ему не удалось войти в заветную семерку. По итогам голосования, которые были объявлены в эту субботу в Лиссабоне (Португалия), список новых чудес света выглядит так: Колизей в Риме (Италия), храм Тадж-Махал (Индия), статуя Христа в Рио-де-Жанейро (Бразилия), город древних инков Мачу-Пикчу (Перу), пирамида племени майя Чичен-Итца (мексиканский полуостров Юкатан), храмовый комплекс Петра (Иордания), Великая Китайская стена.</p>
                <div class="video-box">
                    <h2> Весь мир за одну минуту</h2>
                    <video controls="controls">
                        <source src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/video/MOVE.mp4">
                    </video>
                    <div class="video__text">
                        <p>Если прежде все чудеса света не выходили за пределы Европы и Ближнего Востока, то сегодня своими чудесами могут похвастаться Северная и Южная Америка, а также Азия. Напомним, что в труд Филона Византийского "Семь чудес света" входили египетские пирамиды, "висячие сады" Семирамиды (Вавилон), храм Артемиды в Эфесе (нынешняя Турция), Колосс Родосский (о. Родос), Александрийский маяк (о. Фарос в Средиземном море), гробница Мавсола в Галикарнасе (снова Турция) и статуя Зевса Олимпийского. Из всех этих построек до нашего времени дожили только египетские пирамиды.</p>
                    </div>
                </div>
            </div>
    </section>

</section>
<link rel="stylesheet" type="text/css" href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/slick.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
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
        document.getElementById("btn-al").classList.remove("active");
        document.getElementById("btn-rat").classList.add("active");
        document.querySelector("#cityes").innerHTML = searchChild;

    }
    document.getElementById("btn-al").onclick = function() {
        $(".country-btn-wrap .btn-title span").html(document.querySelector("#btn-al span").innerHTML);
        $(".country-btn-wrap .btn-block").removeClass("active");
        document.getElementById("btn-al").classList.add("active");
        document.getElementById("btn-rat").classList.remove("active");
        var items = document.querySelectorAll('.item-element');
        Array.from(items).sort(function(a, b) {
            a = a.querySelector('span.name-title').innerText.toLowerCase()
            b = b.querySelector('span.name-title').innerText.toLowerCase()
            return (a > b) - (a < b)
        }).forEach(function(n, i) {
            n.style.order = i
        })
    }
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
        }else{
            showElem(showElensVisual, false)
        }
        showElensVisual = showElensVisual + 24;
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
        if(btn){
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