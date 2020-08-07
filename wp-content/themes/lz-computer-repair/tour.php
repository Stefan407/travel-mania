<?php
/*
Template Name: Tour-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/



$my_var = $list->title;
$arr = explode(' ', $my_var);
for ($i = 0; $i <= count($arr); $i++) {
    $arr[$i] = str_replace("—", "", $arr[$i]);
    $arr[$i] = str_replace(" ", "", $arr[$i]);
    if (mb_strlen($arr[$i]) <= 2) {
        unset($arr[$i]);
    }
}
$new_str = implode(", ", $arr);

$page_title =  $my_var . " 2020 - цена и описание Travel Mania";
add_action('pre_get_document_title', function () use ($page_title) {
    return $page_title;
});

$keywords = '<meta name="keywords" content="' . $list->city->country->name_ru . " , " . $list->city->name_ru . ', травел, мания, travel, mania," />';
add_action('wp_head', function () use ($list, $new_str) {
    echo '<meta name="keywords" content="' . $new_str . ", " . $list->city->country->name_ru . ", " . $list->city->name_ru . ', травел, мания, travel, mania," />';
    echo '<meta name="description" content="' . $list->tagline . '" />';
});

get_header();

$current_country = $list->city->country->name_en;
$current_country = str_replace(" ", "-", $current_country);

$current_city = $list->city->name_en;
$current_city = str_replace(" ", "-", $current_city);
?>


<section class="main" style="padding-top:56px">
    <div class="container">
        <div class="main_wrap">
            <div class="row">
                <div class="main_content col-12 col-md-7 col-lg-8">
                    <div class="breadcrumbs" itemscope itemtype="http://schema.org/BreadcrumbList">
                        <div class="breadcrumbs-wrap">
                            <div class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <div class="breadcrumbs__block" >
                                    <a class="breadcrumbs__link" href="/<?php echo ($current_country) ?>/" itemprop="item">
                                        <span itemprop="name"><?php echo ($list->city->country->name_ru) ?></span>
                                    </a>
                                </div>
                                <div class="breadcrumbs__arrow">
                                    <img src="/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
                                </div>
                                <meta itemprop="position" content="1">
                            </div>
                            <div class="breadcrumbs-item" itemprop="itemListElement" itemscope itemtype="http://schema.org/ListItem">
                                <div class="breadcrumbs__block">
                                    <?php
                                    $city_name = str_replace('é', 'e', $list->city->name_en);
                                    $city_name = str_replace('ё', 'e', $city_name);
                                    $city_name = str_replace("'", '', $city_name);
                                    $city_name = str_replace("'", '', $city_name);
                                    $city_name = str_replace("ó", 'o', $city_name);
                                    if ($city__name_en == 'Villefranche-sur-Saône') {
                                        $city__name_en = "Villefranche-sur-Saone";
                                    }
                                    ?>
                                    <a class="breadcrumbs__link" href="/<?php echo ($current_country) ?>/<?php echo ($current_city) ?>/" itemprop="item">
                                        <span itemprop="name" >Экскурсии <?php echo ($list->city->in_obj_phrase) ?></span>
                                    </a>
                                </div>
                                <meta itemprop="position" content="2">
                            </div>
                        </div>
                    </div>

                    <div itemscope itemtype="http://schema.org/Product">
                        <meta itemprop="name" content="<?php echo($page_title) ?>" />
                        <meta itemprop="description" content="<?php echo($list->tagline) ?>" />
                        <meta itemprop="image" content="<?php echo $list->photos[0]->medium ?>" />
                        <span itemprop="offers" itemscope itemtype="http://schema.org/Offer">
                            <meta itemprop="price" content="<?php echo $list->price->value ?> " />
                            <meta itemprop="priceCurrency" content="<?php echo $list->price->currency ?>" />
                        </span>
                        <span itemprop="aggregateRating" itemscope itemtype="http://schema.org/AggregateRating">
                        <?php if( $list->rating > 0){ ?>
                            <meta itemprop="ratingValue" content="<?php echo ($list->rating ) ?>" />
                        <?php } ?>
                        <?php if( $list->review_count > 0){ ?>
                            <meta itemprop="reviewCount" content="<?php echo ($list->review_count ) ?>" />
                        <?php } ?>
                        </span>
                    </div>

                    <div class="main_content-title">
                        <h1> <?php echo ($list->title) ?> </h1>
                    </div>
                    <div class="slider-tours-photo">
                        <?php foreach ($list->photos as $photo) { ?>
                            <img src='<?php echo $photo->medium ?>'>
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
                                                        <img src='<?php echo $list->photos[0]->thumbnail ?>'>
                                                    </a>
                                                </div>
                                                <div class="second-block">
                                                    <?php $indexPhotoSecond = 0 ?>
                                                    <?php foreach ($list->photos as $photo) { ?>
                                                        <?php if ($indexPhotoSecond > 0) { ?>
                                                            <a href="<?php echo $photo->medium ?>" data-fancybox="images" data-caption="My caption" data-length="+<?php echo (count($list->photos) - 3) ?>">
                                                                <img src='<?php echo $photo->thumbnail ?>'>
                                                            </a>
                                                        <?php } ?>
                                                        <?php $indexPhotoSecond++ ?>
                                                    <?php } ?>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="guide des">
                                            <img src="<?php echo $list->guide->avatar->medium ?>" alt="">
                                            <h3> Гид <?php echo $list->guide->first_name ?> </h3>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="order-panel-wrap">
                                <div class="panel-title"> - Забронировать -</div>
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
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                </span>
                                                <span class="reviews-rating-img bac">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                    <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
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
                                    <div class="order-item-string"><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/lightning.svg"> Быстрое бранирование </div>
                                    <div class="order-item-string"><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/warranty-icon.svg"> Гарантия лучшей цены </div>
                                    <div>
                                        <div class="panel-btns">
                                            <div> <a class="order-btn" target="_blank" onclick="ym(56569540,'reachGoal','bron')" href="/go/?url=<?php echo $list->url ?>&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link">Забронировать </a> </div>
                                            <div> <a class="more-btn" target="_blank" onclick="ym(56569540,'reachGoal','data')" href="/go/?url=<?php echo $list->url ?>&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link">Выбрать дату </a> </div>
                                            <div> <a class="order-ask" target="_blank" onclick="ym(56569540,'reachGoal','vopros')" href="/go/?url=<?php echo $list->url ?>&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link">Задать вопрос гиду</a> </div>
                                        </div>
                                </span>
                            </div>
                        </div>
                        <div class="description-content-text">
                            <div class="guide mob">
                                <img src="<?php echo $list->guide->avatar->medium ?>" alt="">
                                <h3> Гид <?php echo $list->guide->first_name ?> </h3>
                            </div>
                        </div>
                        <?php if ($reviews->results) { ?>
                            <div id="description-item-reviews">
                                <div class="row">
                                    <div class="description-content col-12">
                                        <div class="description-title ">
                                            <h2>Отзывы</h2>
                                            <p class="description-section_text">Написать отзыв могут только посетившие экскурсию гости</p>

                                        </div>
                                        <?php foreach ($reviews->results as $rew) { ?>
                                            <div class=" description-content-text-reviews ">
                                                <div class="reviews-photo ">
                                                    <img class="reviews-photo-img" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/user-icon.png" alt="">
                                                </div>
                                                <div class="reviews-box">
                                                    <div class="reviews-title">
                                                        <div class="name"><span><?php echo $rew->name  ?></span>
                                                            <span class="reviews-date"><?php echo $rew->created_on ?></span>
                                                        </div>
                                                        <div class="star-rating-item">
                                                            <span class="reviews-rating-img" style="width: <?php echo ($rew->rating * 20) ?>%">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                            </span>
                                                            <span class="reviews-rating-img bac">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                                                <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
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
                            <div class="reviews-btn">
                                <span onclick="more()">Показать еще...</span>
                            </div>
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
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                    </span>
                                    <span class="reviews-rating-img bac">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
                                        <img class="icon-star" src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/icon-star-1.png" alt="">
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
                        <div class="order-item-string"><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/lightning.svg"> Быстрое бранирование </div>
                        <div class="order-item-string"><img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/warranty-icon.svg"> Гарантия лучшей цены </div>
                        <div>
                            <div class="panel-btns">
                                <div> <a class="order-btn" target="_blank" onclick="ym(56569540,'reachGoal','bron');ym(56569540, 'reachGoal', 'trip')" href="/go/?url=<?php echo $list->url ?>&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link">Забронировать </a> </div>
                                <div> <a class="more-btn" target="_blank" onclick="ym(56569540,'reachGoal','data');ym(56569540, 'reachGoal', 'trip')" href="/go/?url=<?php echo $list->url ?>&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link">Выбрать дату </a> </div>
                                <div> <a class="order-ask" target="_blank" onclick="ym(56569540,'reachGoal','vopros');ym(56569540, 'reachGoal', 'trip')" href="/go/?url=<?php echo $list->url ?>&exp_partner=travel-mania&utm_source=travel-mania&utm_campaign=affiliates&utm_medium=link">Задать вопрос гиду</a> </div>
                            </div>
                    </span>
                </div>
            </div>
        </div>
    </div>
</section>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/slick.min.js"></script>
<script src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/js/jquery.fancybox.min.js"></script>
<script>
    $('.slider-tours-photo').slick({
        arrows: false,
        dots: true,
        autoplay: true,
        autoplaySpeed: 3000
    });

    function parametrEdit() {
        // if (document.getElementById("star-value")) {
        //     let starValue = (20 * document.getElementById("star-value").innerHTML);
        //     document.getElementById("star-rating").style.width = starValue + "%";
        // }
        let reviewsDate = document.getElementsByClassName("reviews-date");
        // let reviewsRatings = document.getElementsByClassName("reviews-rating");
        // let reviewsRatingImg = document.getElementsByClassName("reviews-rating-img");


        for (i = 0; i < reviewsDate.length; i++) {
            reviewsDate[i].innerHTML = reviewsDate[i].innerHTML.split("-").reverse().join(".");
        }

        // for (i = 0; i < reviewsRatings.length; i++) {
        //     reviewsRatingImg[i].style.width = reviewsRatings[i].innerHTML * 20 + "%";
        //     reviewsRatingImg[i].style.minWidth = reviewsRatings[i].innerHTML * 20 + "%";
        // }
    };
    parametrEdit();
    $('[data-fancybox]').fancybox({
        protect: true
    });

    function more() {
        document.getElementById("description-item-reviews").style.maxHeight = "100%";
        document.querySelector(".reviews-btn").style.display = "none";
    }
</script>
<?php get_footer(); ?>