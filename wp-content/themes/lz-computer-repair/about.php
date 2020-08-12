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
    <div class="breadcrumbs" style="display:none" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
        <div class="container breadcrumbs-wrap">
            <div class="breadcrumbs-item">
                <div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <a class="breadcrumbs__link" href="/" itemprop="item">
                        <span itemprop="name">Главная</span>
                        <meta itemprop="position" content="1">
                    </a>
                </div>
                <div class="breadcrumbs__arrow">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/arrow-bread.png" alt="">
                </div>
                <div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
                    <p class="breadcrumbs__text">
                        <span itemprop="name">О нас</span>
                        <meta itemprop="item" content="<?= home_url() ?>/about">
                        <meta itemprop="position" content="2">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="about-what">

        <div class="container">
            <h1 class="about-title g-ac">Проект Travel Mania</h1>
            <div class="about-text gm_t10 gm_b20">
                Travel Mania находит лучшие предложения по самым выгодным ценам и размещаем у себя на сайте. При бронировании Вы переходите на страницу поставщика и бронируете выбранные экскурсии без посредников.
            </div><br>
            <div class="about-text gm_t10 gm_b20">
                На сегодня охвачено более <a href="/all-cities/" class="azure-link">600 городов</a> в <a href="/all-countries/" class="azure-link">93 странах</a> мира. Предлагаются тысячи эксклюзивных экскурсий, которые можно забронировать и оплатить онлайн. Только самые продуманные маршруты и выгодные цены, о чем свидетельствуют более 140 000 отзывов.
            </div>
            <div class="about-what-wrap">
                <div class="about-what-block">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/countrie.png">
                    <div class="about-what__title">93<br>страны</div>
                </div>
                <div class="about-what-block">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/city.png">
                    <div class="about-what__title">600+<br>городов</div>
                </div>
                <div class="about-what-block">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/review.png">
                    <div class="about-what__title">140 000+<br>отзывов</div>
                </div>
                <div class="about-what-block">
                    <img src="<?php bloginfo("template_url"); ?>/assets/images/blog.png">
                    <div class="about-what__title"><a href="/blog/" class="azure-link">Блог<br>лайфхаков</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-line about-how">
        <div class="container">
            <h2 class="about-title g-ac">Как бронировать экскурсии</h2>

            <div class="about-how-block">
                <img src="<?php bloginfo("template_url"); ?>/assets/images/about-img-1.png" alt="" class="about-how__img">
                <div class="about-how__info">
                    <div class="about-how__info-title">Выбирайте экскурсию на сайте</div>
                    Все экскурсии, представленные на сайте - авторские, экскурсию проводит человек, который её продумал до мелочей! Выбрав экскурсию можно заранее прочитать полное описание программы, посмотреть, что гид написал о себе. Вы можете познакомиться с отзывами других путешественников, которые уже побывали на выбранной Вами экскурсии.
                </div>
            </div>
            <div class="about-how-block about-how-block_2">
                <img src="<?php bloginfo("template_url"); ?>/assets/images/about-img-2.png" alt="" class="about-how__img">
                <div class="about-how__info">
                    <div class="about-how__info-title">Задайте вопрос гиду до оплаты</div>
                    До момента бронирования экскурсии, возможно задать любой вопрос гиду! Подберите экскурсию и прейдите по ссылке "задать вопрос гиду". Вы будете направлены на страницу полного описания экскурсии и формы "обратной связи с гидом", где можно задать любой вопрос. Оплачивайте экскурсию тогда, когда проясните важные для себя детали.
                </div>
            </div>
            <div class="about-how-block about-how-block_3">
                <img src="<?php bloginfo("template_url"); ?>/assets/images/about-img-3.png" alt="" class="about-how__img">
                <div class="about-how__info">
                    <div class="about-how__info-title">Оплачивайте только часть суммы</div>
                    Бронируя экскурсию, Вы оплачиваете только 20% от стоимости, что позволяет гиду запланировать точное время экскурсии, которое вы выбрали. Оставшуюся часть Вы оплачиваете после экскурсии гиду.
                </div>
            </div>
        </div>
    </div>
</section>
<?php get_footer(); ?>