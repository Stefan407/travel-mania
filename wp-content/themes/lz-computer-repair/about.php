<?php
/*
Template Name: about-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
if (!function_exists('filter_function_name_Cities')) {
    add_filter('document_title_parts', 'filter_function_name_Cities');
    function filter_function_name_Cities($title)
    {

        $title['title'] = 'Информация о нас';
        $title['site'] = '';
        $title['page '] = '';
        $title['tagline '] = '';

        return $title;
    }
}
?>

<head>
    <?php wp_head(); ?>
    <meta name="keywords" content="о нас, о компании, о проекте, информация, травэл, мания, travel, mania," />
    <meta name="description" content="Информация о проекте Travel Mania" />
</head>
<?php get_header(); ?>
<section class="top">
    <div class="breadcrumbs" style="display:none">
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
                <link itemprop="url" href="/about/">
                <p class="breadcrumbs__text">
                    <span itemprop="title">О нас</span>
                </p>
            </div>
        </div>
    </div>
    <div class="about-what">
    
        <div class="container">
            <h1 class="about-title g-ac">Проект Travel Mania</h1>
            <div class="about-text gm_t10 gm_b20">
             Travel Mania — сервис информационной помощи путешественникам. Мы находим лучшие предложения по самым выгодным ценам, размещаем у себя на сайте, но при бронировании Вы переходите на страницу поставщика и бронирует выбранные экскурсии без посредников.
             </div><br>
            <div class="about-text gm_t10 gm_b20">
             На сегодня охвачено более <a href="/all-cities/" class="azure-link">600 городов</a>  в <a href="/all-countries/" class="azure-link">93 странах</a>. Предлагаются тысячи эксклюзивных экскурсий, которые можно забронировать и оплатить онлайн. Только самые продуманные маршруты и выгодные цены, о чем свидетельствуют более 140 000 отзывов.
             </div>
            <div class="about-what-wrap">
                <div class="about-what-block">
                <img src="/wp-content/themes/lz-computer-repair/assets/images/countrie.png">
                    <div class="about-what__title">93<br>страны</div>
                </div>
                <div class="about-what-block">
                <img  src="/wp-content/themes/lz-computer-repair/assets/images/city.png">
                    <div class="about-what__title">600+<br>городов</div>
                </div>
                <div class="about-what-block">
                <img  src="/wp-content/themes/lz-computer-repair/assets/images/review.png">
                    <div class="about-what__title">140 000+<br>отзывов</div>
                </div>
                <div class="about-what-block">
                <img  src="/wp-content/themes/lz-computer-repair/assets/images/blog.png">
                    <div class="about-what__title"><a href="/blog/" class="azure-link">Блог<br>лайфхаков</a></div>
                </div>                
            </div>
        </div>
    </div>
    <div class="white-line about-how">
        <div class="container">
            <h2 class="about-title g-ac">Как бронировать экскурсии</h2>

            <div class="about-how-block">
                <img src="/wp-content/themes/lz-computer-repair/assets/images/about-img-1.png" alt="" class="about-how__img" data-pagespeed-url-hash="2549494515" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                <div class="about-how__info">
                    <div class="about-how__info-title">Выбирайте экскурсию на сайте</div>
                    Все наши экскурсии – авторские, экскурсию проводит человек, который её продумал до мелочей! Выбрав экскурсию можно заранее прочитать полное описание программы, посмотреть, что гид написал о себе. Вы можете познакомиться с отзывами других путешественников, которые уже побывали на выбранной Вами экскурсии.
                </div>
            </div>
            <div class="about-how-block about-how-block_2">
                <img src="/wp-content/themes/lz-computer-repair/assets/images/about-img-2.png" alt="" class="about-how__img" data-pagespeed-url-hash="982884928" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                <div class="about-how__info">
                    <div class="about-how__info-title">Задайте вопрос гиду до оплаты</div>
                    Бронирование экскурсии происходит через сайт, при этом вы общаетесь напрямую с гидом! Если у Вас есть вопросы, можете задать гиду до оплаты экскурсии. Оплачивайте тогда, когда проясните важные для себя детали.
                </div>
            </div>
            <div class="about-how-block about-how-block_3">
                <img src="/wp-content/themes/lz-computer-repair/assets/images/about-img-3.png" alt="" class="about-how__img" data-pagespeed-url-hash="2327365792" onload="pagespeed.CriticalImages.checkImageForCriticality(this);">
                <div class="about-how__info">
                    <div class="about-how__info-title">Оплачивайте только часть суммы</div>
                    На сайте Вы оплачиваете только 20% от стоимости экскурсии, это позволяет гиду забронировать выбранное Вами время. Оставшуюся часть вы оплачиваете после экскурсии гиду.
                </div>
            </div>
        </div>
    </div>    
</section>
<link rel="stylesheet" type="text/css" href="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/css/slick.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
<script>
    $('.image').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
</script><?php get_footer(); ?>