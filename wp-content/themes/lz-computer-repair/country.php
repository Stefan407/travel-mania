<?php
/*
Template Name: Country-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/

$des_countries_path = $_SERVER['DOCUMENT_ROOT'] . '/wp-content/themes/lz-computer-repair/description/des-country.json';
$des_countries = file_get_contents($des_countries_path);
$des_countries = json_decode($des_countries);

$current_country = $list[0]->country->name_en;
$current_country = str_replace(" ", "-", $current_country);

$current_des_countries = array_filter($des_countries, function ($country) use ($current_country) {
    return $country->name == $current_country;
});
$current_des_country = reset($current_des_countries);


$my_var = $list[0]->country->in_obj_phrase;
$textRu = " на русском языке ";
if ($list[0]->country->name_en == "Russia" or $list[0]->country->name_en == "Ukraine" or $list[0]->country->name_en == "Crimea") {
    $textRu = "";
};
$page_title =  "Экскурсии " . $my_var . $textRu . " 2020 🥇 цены и описание - Travel Mania 🥇";
add_action('pre_get_document_title', function () use ($page_title) {
    return $page_title;
});

add_action('wp_head', function () use ($list) {
    echo '<meta name="keywords" content="экскурсии, ' . $list[0]->country->name_ru . ' , русский, на русском, гиды, 2020 авторские, эксклюзивные, исторические, обзорные, пешеходные, на автобусе, купить, заказать, забронировать, цена, недорого, дешево, скидка, описание, список, прайс, травэл, мания, travel, mania" />';
    echo '<meta name="description" content="✅ Групповые и индивидуальные экскурсии ' . $list[0]->country->in_obj_phrase . ' с интересными и харизматичными гидами. Быстрое бронирование всех экскурсий по актуальным ценам 2020 года. Перед заказом любой экскурсии можно задать вопрос гиду на сайте. У нас собраны лучшие экскурсии ' . $list[0]->country->in_obj_phrase . ', которые тщательно продуманы и составлены гидами." />';
});
?>

<?php get_header(); ?>

<section class="top">
    <div class="top__slider">
        <div id="top-images" class="image-top_slider">
            <?php if ($current_des_country->images != "") : ?>
                <?php $indexImg = 0; ?>
                <?php foreach ($current_des_country->images as $imgUrls) {
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
                    <h1>Авторские экскурсии <?php echo ($list[0]->country->in_obj_phrase); ?></h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
        <div class="container breadcrumbs-wrap">
            <div class="breadcrumbs-item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                <div class="breadcrumbs__block">
                    <a class="breadcrumbs__link" href="<?= home_url() ?>" itemprop="item">
                        <span itemprop="name">Главная</span>
                        <meta itemprop="position" content="1">
                    </a>
                </div>
                <div class="breadcrumbs__arrow">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/arrow-bread.png" alt="">
                </div>
            </div>
            <div class="breadcrumbs-item" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                <div class="breadcrumbs__block">
                    <p class="breadcrumbs__text">
                        <span itemprop="name"><?php echo ($list[0]->country->name_ru) ?></span>
                        <meta itemprop="position" content="2">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div style="display:none;" id="country"><?php echo ($list[0]->country->name_en); ?></div>
        <script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
        <div class="border-box">
            <h2>Экскурсии <?php echo ($list[0]->country->in_obj_phrase); echo(" "); echo ($textRu); ?></h2>
            <div id="top-text" class="border-box__text">
                <?php if ($current_des_country->textTop != "") : ?>
                    <?php echo $current_des_country->textTop; ?>
                <?php else : ?>
                    Организация экскурсий <?php echo ($list[0]->country->in_obj_phrase); ?> на русском языке от Travel Mania.
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
        <div style="display:none;" id="type-page">country</div>
    </div>
</section>

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
            <?php foreach ($list as $country) { ?>
                <div id="item-element" class="item-element w-33 <?php if ($count > 24) { ?>hide<?php } ?>">
                    <?php
                    $city_name = str_replace('é', 'e', $country->name_en);
                    $city_name = str_replace('ё', 'e', $city_name);
                    $city_name = str_replace("'", '', $city_name);
                    $city_name = str_replace("'", '', $city_name);
                    $city_name = str_replace("ó", 'o', $city_name);
                    if ($city__name_en == 'Villefranche-sur-Saône') {
                        $city__name_en = "Villefranche-sur-Saone";
                    }
                    ?>
                    <a href="<?= home_url() ?>/<?php echo str_replace('+', '-', $country__name_en) ?>/<?php echo str_replace('+', '-', urlencode($city_name)) ?>/">
                        <img src="<?php echo ($country->image->thumbnail)  ?>" alt="">
                        <div class="item-title-wrap">
                            <div class="item-title"><span class="name-title"><?php echo $country->name_ru ?></span></div>
                            <span class="item-span">Экскурсий: <?php echo ($country->experience_count) ?> </span>
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
            <h2>Главные экскурсионные места <?php echo ($list[0]->country->in_obj_phrase); ?></h2>
            <div class="video-box">
                <div id="video-text-country" class="video__text">
                    <?php if ($current_des_country->textButton != "") : ?>
                        <?php echo $current_des_country->textButton; ?>
                    <?php else : ?>
                        В ближайшие время мы подготовим детальное описание главных экскурсионных маршрутов <?php echo ($list[0]->country->in_obj_phrase); ?>.
                    <?php endif; ?>
                </div>
                <div>
                    <h2>Как забронировать экскурсию</h2>
                    <p>Забронировать экскурсии <?php echo ($list[0]->country->in_obj_phrase); ?> поможет наш видиопример. Перед тем, как Вы определитесь с тематикой экскурсии и выбирите удобную дату, можно задать любой вопрос гиду. Посмотрите видео и узнайте все наши приемущества.</p>
                    <video controls="controls" playsinline poster="<?php bloginfo("template_url"); ?>/assets/images/TRAVEL-MANIA-EXMP.png">
                        <source src="<?php bloginfo("template_url"); ?>/assets/video/TRAVEL-MANIA-EXMP.mp4" type="video/webm">
                        <source src="<?php bloginfo("template_url"); ?>/assets/video/TRAVEL-MANIA-EXMP.mp4" type="video/mp4">
                    </video>
                    <p class="autor">
                        Видео: Travel Mania ©
                    </p>
                </div>
                <div class="video__text">
                    <p>Бронирование происходит через сайт, при этом Вы общаетесь напрямую с гидом и можете задать ему любые вопросы. Вам не нужно ничего оплачивать, пока вы не проясните важные для себя детали.</p>
                </div>

            </div>
</section>
<?php get_footer(); ?>

<script>
    $(".country-btn-wrap .btn-title").on("click", function() {
        $(".country-btn-wrap .btn-block").toggleClass("active");
    })

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


    function slideFunc() {
        $("#top-images img").css({
            "opacity": "1",
            "display": "block"
        });
    }

    setTimeout(slideFunc, 500);
</script>