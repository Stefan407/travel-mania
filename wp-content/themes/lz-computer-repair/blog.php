<?php
/*
Template Name: blog-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
?>
<?php

if (!function_exists('filter_function_name_Cities')) {
    add_filter('document_title_parts', 'filter_function_name_Cities');
    function filter_function_name_Cities($title)
    {

        $title['title'] = 'Блог лайфхаков путешественника ⭐';
        $title['site'] = '';
        $title['page '] = '';
        $title['tagline '] = '';

        return $title;
    }
}
?>

<head>
    <?php wp_head(); ?>
    <meta name="keywords" content="блог, лайфхаки, советы, статьи, публикации, заметки, полезное, трэвэл, мания, travel, mania" />
    <meta name="description" content="В нашем блоге мы собрали лайфхаки и полезные советы всем путешественникам - Тревел Мания!" />
</head>
<?php get_header(); ?>
<section class="top">
    <div class="top__slider">
        <div class="image-top_slider">
            <img src="<?= home_url() ?>/wp-content/uploads/Main/Main-11.jpg" alt="">
        </div>
        <div class="top__slider-text">
            <div class="container">
                <div class="top__content-text">
                    <h1>Блог лайфхаков путешественника</h1>
                </div>
            </div>
        </div>
    </div>
    <div class="breadcrumbs" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
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
                        <span itemprop="name">Блог</span>
                        <meta itemprop="item" content="<?= home_url() ?>blog/">
                        <meta itemprop="position" content="2">
                    </p>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="border-box">
            <h2>Полезные статьи для друзей Travel Mania</h2>
            <div class="border-box__text">
            В нашем блоге мы регулярно будет публиковать полезные статьи и советы всем путешественникам.
            </div>
        </div>
    </div>
</section>
<div class="container">
    <div class="blog-page">
        <?php $post_data = get_post(141); ?>
        <?php $recent_posts = wp_get_recent_posts(); ?>
        <ul class="blog-list">
            <?php foreach ($recent_posts as $post) { ?>
                <li class="blog-item_block <?php echo ($post['post_name']) ?>">
                    <a href="<?php echo ("/" . $post['post_name'] . "/") ?>">
                        <?php echo get_the_post_thumbnail($post['ID'], 'medium', array('class' => 'alignleft')); ?>
                        <div class="post-item">
                            <div class="title"><?php echo ($post['post_title']) ?></div>
                            <div class="text"><?php echo ($post['post_excerpt']) ?></div>
                        </div>
                    </a>
                </li>
            <?php } ?>
        </ul>
    </div>
</div>

<script>

    if ($(".color-bac").length) {
        $(".color-bac").each(function() {
            if ($(this).data("bac-color")) {
                let backColor = $(this).data("bac-color");
                let colorText = $(this).data("color");
                $(this).closest(".post-item").css({
                    "background-color": backColor,
                    "color": colorText,
                    "box-shadow": "0px 12px 20px 36px " + backColor + ""
                });
            }
        })
    }

    var observableElements = [];

    if (document.querySelector('.blog-item_block')) {
        let products = document.querySelectorAll('.blog-item_block');
        for (i = 0; i < products.length; i++) {
            observableElements.push(products[i]);
        }
    }

    if ("IntersectionObserver" in window) {
        let animationObserver = new IntersectionObserver(function(entries, observer) {
            entries.forEach(function(entry) {
                if (entry.isIntersecting) {
                    let animationElement = entry.target;
                    animationElement.classList.add("active");
                    animationObserver.unobserve(animationElement);
                }
            });
        });

        observableElements.forEach(function(observableElement) {
            animationObserver.observe(observableElement);
        });
    } else {
        observableElements.forEach(function(observableElement) {
            observableElement.classList.add("active");
        });
    }
</script>
<?php get_footer(); ?>