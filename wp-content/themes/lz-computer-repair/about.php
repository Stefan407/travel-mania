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
                    <link itemprop="url" href="/about/">
                    <p class="breadcrumbs__text">
                        <span itemprop="title">О нас</span>
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
                    <img src="/wp-content/themes/lz-computer-repair/assets/images/countrie.png">
                    <div class="about-what__title">93<br>страны</div>
                </div>
                <div class="about-what-block">
                    <img src="/wp-content/themes/lz-computer-repair/assets/images/city.png">
                    <div class="about-what__title">600+<br>городов</div>
                </div>
                <div class="about-what-block">
                    <img src="/wp-content/themes/lz-computer-repair/assets/images/review.png">
                    <div class="about-what__title">140 000+<br>отзывов</div>
                </div>
                <div class="about-what-block">
                    <img src="/wp-content/themes/lz-computer-repair/assets/images/blog.png">
                    <div class="about-what__title"><a href="/blog/" class="azure-link">Блог<br>лайфхаков</a></div>
                </div>
            </div>
        </div>
    </div>
    <div class="white-line about-how">
        <div class="container">
            <h2 class="about-title g-ac">Как бронировать экскурсии</h2>

            <div class="about-how-block">
                <img src="/wp-content/themes/lz-computer-repair/assets/images/about-img-1.png" alt="" class="about-how__img">
                <div class="about-how__info">
                    <div class="about-how__info-title">Выбирайте экскурсию на сайте</div>
                    Все экскурсии, представленные на сайте - авторские, экскурсию проводит человек, который её продумал до мелочей! Выбрав экскурсию можно заранее прочитать полное описание программы, посмотреть, что гид написал о себе. Вы можете познакомиться с отзывами других путешественников, которые уже побывали на выбранной Вами экскурсии.
                </div>
            </div>
            <div class="about-how-block about-how-block_2">
                <img src="/wp-content/themes/lz-computer-repair/assets/images/about-img-2.png" alt="" class="about-how__img">
                <div class="about-how__info">
                    <div class="about-how__info-title">Задайте вопрос гиду до оплаты</div>
                    До момента бронирования экскурсии, возможно задать любой вопрос гиду! Подберите экскурсию и прейдите по ссылке "задать вопрос гиду". Вы будете направлены на страницу полного описания экскурсии и формы "обратной связи с гидом", где можно задать любой вопрос. Оплачивайте экскурсию тогда, когда проясните важные для себя детали.
                </div>
            </div>
            <div class="about-how-block about-how-block_3">
                <img src="/wp-content/themes/lz-computer-repair/assets/images/about-img-3.png" alt="" class="about-how__img">
                <div class="about-how__info">
                    <div class="about-how__info-title">Оплачивайте только часть суммы</div>
                    Бронируя экскурсию, Вы оплачиваете только 20% от стоимости, что позволяет гиду запланировать точное время экскурсии, которое вы выбрали. Оставшуюся часть Вы оплачиваете после экскурсии гиду.
                </div>
            </div>
        </div>
    </div>
</section>
<div class="search-wrap" style="display:none;">
    <div class="search-block">
        <div class="search-item">
            <input placeholder="Куда вы собираетесь?" type="text" id="searchInput" class="search-input">
            <ul id="searchList" class="search-list">

            </ul>
        </div>
    </div>
</div>

<style>
    .search-wrap {
        padding-bottom: 10px;
        /* display: none; */
        background-color: #d6f2ff;
    }

    .search-wrap input.search-input {
        display: block;
        width: 340px;
        height: 50px;
        font-size: 16px !important;
        padding: 0 10px;
        margin: 0;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        color: #495662;
        line-height: 22px;
        border-radius: 3px;
        border: 1px solid #b6b7bb;
        -webkit-box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .2);
        box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .2);
    }

    .search-block {
        position: relative;
        width: 675px;
        padding: 15px 0;
        border-radius: 90px;
        display: flex;
        justify-content: center;
        background: -webkit-gradient(linear, left top, right top, from(#b5f2b5), to(#fafab1));
        background: -o-linear-gradient(left, #b5f2b5 0, #fafab1 100%);
        background: linear-gradient(90deg, #b5f2b5 0, #fafab1);
        margin: 0 auto;
    }

    .search-item {
        position: relative;
    }

    .search-list {
        /* position: absolute; */
        flex-direction: column;
        width: 100%;
        background: #fff;
        max-height: 250px;
        overflow: auto;
    }

    .search-wrap.active .search-list {
        display: flex;
    }

    .search-list a {
        padding: 5px 10px;
    }

    .search-list a:hover {
        background-color: #3f3f3f15;
        color: #e66363;

    }
</style>
<script>
    $(document).ready(function() {
        // let inputSearch = $(".search-wrap input.search-input");
        // inputSearch.click(function() {
        //     $(".search-wrap").addClass("active")
        // })

        // inputSearch.blur(function() {
        //     $(".search-wrap").removeClass("active")
        // })
        // inputSearch.attr('spellcheck', false);


        function request(url) {
            var xhr = new XMLHttpRequest();
            let data = null;
            xhr.open('GET', 'https://experience.tripster.ru/api/search/site/?format=json&query=' + url + '', false);
            xhr.send();
            if (xhr.status != 200) {
                alert(xhr.status + ': ' + xhr.statusText);
            } else {
                data = jQuery.parseJSON(xhr.responseText);
            }
            return data;
        }

        function replaceName(type, value) {
            switch (type) {
                case "noEm":
                    let newStr1 = value.replace('<em>', '').replace('</em>', '');
                    return newStr1;
                    break;
                case "noSpace":
                    let newStr2 = value.replace(' ', '-').replace('_', '-').replace('+', '-');
                    return newStr2;
                    break;
                default:
                    break;
            }

        }

        function initUrlExperience(title, id, price, image) {
            var xhr = new XMLHttpRequest();
            let data = null;
            xhr.open('GET', 'https://experience.tripster.ru/api/experiences/' + id + '', false);
            xhr.send();
            if (xhr.status != 200) {
                alert(xhr.status + ': ' + xhr.statusText);
            } else {
                data = jQuery.parseJSON(xhr.responseText);
            }
            let cityName = replaceName("noSpace", data.city.name_en);
            let countryName = replaceName("noSpace", data.city.country.name_en);
            let url = "https://travel-mania.org/" + countryName + "/" + cityName + "/" + id;
            console.log(data)
            console.log(url)
        }



        function editListSearch(data) {
            let searchList = $("#searchList");
            searchList.text("");
            if (data.length) {
                $(data).each(function() {
                    let type = this.type;
                    switch (type) {
                        case "country":
                            let newNameCountry = replaceName("noEm", this.title)
                            // initUrlCountry(this.title);
                            break;
                        case "city":
                            let newNameCity = replaceName("noEm", this.title)
                            // initUrlCity();
                            break;
                        case "experience":
                            initUrlExperience(this.title, this.id, this.price, this.image);
                            break;
                        case "citytag":
                            break;
                        default:
                            break;
                    }
                });
                // console.log(data)
            }
        }

        // $("#searchInput").on("click", function(e) {
        //     var value = $(this).val();
        //     let data = request(value);
        //     editListSearch(data)

        // })
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            let data = request(value);
            editListSearch(data)
        });
    });
</script>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
<script>
    $('.image').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });
</script><?php get_footer(); ?>