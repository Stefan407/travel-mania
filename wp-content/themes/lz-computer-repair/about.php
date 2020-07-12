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
            <div class="search-list_wrap">
                <div class="list-country"></div>
                <div class="exp-header" style="display:none;">ПОПУЛЯРНЫЕ ЭКСКУРСИИ</div>
                <div class="list-tours"></div>
            </div>
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
        width: 100%;
        height: 36px;
        padding: 5px 20px 6px 7px;
        border-radius: 3px 0 0 3px;
        -webkit-box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .2);
        box-shadow: inset 0 1px 2px 0 rgba(0, 0, 0, .2);
        margin: 0;
        border: 0;
        outline: none;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        overflow: hidden;
        white-space: nowrap;
        -o-text-overflow: ellipsis;
        text-overflow: ellipsis;
    }

    .search-block {
        position: relative;
        width: 100%;
        display: flex;
        justify-content: center;
        background: #fff;
    }

    .search-item {
        position: relative;
        width: 100%;
    }

    .search-list_wrap {
        display: flex;
        flex-direction: column;
    }

    .search-list_wrap a {
        display: flex;
        position: relative;
        padding: 10px 10px;
        align-items: center;
    }

    .search-list_wrap a:hover {
        background: #f3f3f3;
    }

    .search-list_wrap a img.loc {
        width: 25px;
        margin-right: 5px;
    }

    .search-list_wrap a img.tour {
        width: 65px;
        max-height: 100%;
        margin-right: 10px;
        height: 100%;
        object-fit: cover;
    }

    .search-list_wrap a .inner {
        display: flex;
        width: calc(100% - 170px);
        align-items: center;
        flex-wrap: wrap;
    }

    .search-list_wrap a .inner .title1 {
        margin-right: 10px;
    }

    .search-list_wrap a .inner .title2 {
        color: #828282;
    }

    .search-list_wrap a .inner em {
        font-weight: 500;
        font-style: inherit;
    }

    .search-list_wrap a .left-block {
        position: absolute;
        right: 10px;
        color: #828282;
    }

    .search-list_wrap .exp-header {
        color: #8b8b8b;
        font-size: 15px;
        border-top: 1px solid #ececef;
        padding: 15px 10px 10px;
    }
</style>
<script>
    $(document).ready(function() {
        let searchList = $(".search-list_wrap");
        let searchListCountries = $(".search-list_wrap .list-country");
        let searchListTours = $(".search-list_wrap .list-tours");
        let searchListHrader = $(".search-list_wrap .exp-header");

        function request(url) {
            var xhr = new XMLHttpRequest();
            let data = null;
            xhr.open('GET', 'https://experience.tripster.ru/api/search/site/?format=json&query=' + url + '&limit=12', false);
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
                    let newStr1 = value.replace('<em>', '').replace('<em>', '').replace('</em>', '').replace('</em>', '');
                    return newStr1;
                    break;
                case "noSpace":
                    let newStr2 = value.replace("_", "-").replace("_", "-").replace("+", "-").replace("+", "-").replace(" ", "-").replace(" ", "-");
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
            let cityNameRu = data.city.name_ru;
            let countryName = replaceName("noSpace", data.city.country.name_en);
            let url = "https://travel-mania.org/" + countryName + "/" + cityName + "/excursion-" + id;
            searchListTours.append("<a href=" + url + " class='result-item'><img class='tour' src=" + image + "><div class='inner'><div class='title1'>" + title + "</div><div class='title2'>" + cityNameRu + "</div></div><div class='left-block'>" + price + "</div></a>")
        }



        function initUrlCountry(title, name, count) {
            var xhr = new XMLHttpRequest();
            let data = null;
            xhr.open('GET', 'https://experience.tripster.ru/api/countries/?name_ru=' + name + '', false);
            xhr.send();
            if (xhr.status != 200) {
                alert(xhr.status + ': ' + xhr.statusText);
            } else {
                data = jQuery.parseJSON(xhr.responseText);
            }
            let countryName = replaceName("noSpace", data.results[0].name_en);
            let url = "https://travel-mania.org/" + countryName;
            searchListCountries.append("<a href=" + url + " class='result-item'><img class='loc' src='/wp-content/themes/lz-computer-repair/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + title + "</div><div class='title2'></div></div><div class='left-block'>" + count + "</div></a>");

        }

        function initUrlCity(title, name, count) {
            var xhr = new XMLHttpRequest();
            let data = null;
            xhr.open('GET', 'https://experience.tripster.ru/api/cities/?name_ru=' + name + '', false);
            xhr.send();
            if (xhr.status != 200) {
                alert(xhr.status + ': ' + xhr.statusText);
            } else {
                data = jQuery.parseJSON(xhr.responseText);
            }
            let cityName = replaceName("noSpace", data.results[0].name_en);
            let countryName = replaceName("noSpace", data.results[0].country.name_en);
            let countryNameRu = data.results[0].country.name_ru;
            let url = "https://travel-mania.org/" + countryName + "/" + cityName;
            searchListCountries.append("<a href=" + url + " class='result-item'><img class='loc' src='/wp-content/themes/lz-computer-repair/assets/images/icon-location.svg'><div class='inner'><div class='title1'>" + title + "</div><div class='title2'>" + countryNameRu + "</div></div><div class='left-block'>" + count + "</div></a>");
        }

        function editListSearch(data) {
            searchListCountries.text("");
            searchListTours.text("");
            searchListHrader.hide();
            if (data.length) {
                $(data).each(function() {
                    let type = this.type;
                    switch (type) {
                        case "country":
                            let newNameCountry = replaceName("noEm", this.title)
                            initUrlCountry(this.title, newNameCountry, this.experience_count);
                            break;
                        case "city":
                            let newNameCity = replaceName("noEm", this.title)
                            initUrlCity(this.title, newNameCity, this.experience_count);
                            break;
                        case "experience":
                            searchListHrader.show();
                            initUrlExperience(this.title, this.id, this.price, this.image);
                            break;
                        case "citytag":
                            break;
                        default:
                            break;
                    }
                });
            }
        }
        $("#searchInput").on("keyup", function() {
            var value = $(this).val().toLowerCase();
            let data = request(value);
            editListSearch(data)
        });
        $("#searchInput").on("click", function(e) {
            var value = $(this).val();
            if (!value.length) {
                let data = request(value);
                console.log(value)
                editListSearch(data)
            }
        })
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