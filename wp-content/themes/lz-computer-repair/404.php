<?php
/*
Template Name: page-404
 *@package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
function custom_title($my_var)
{
    global $my_var;
    $title['title'] =  "Страница не найдена - 404";
    $title['site'] = '';
    $title['page '] = '';
    $title['tagline '] = '';
    return $title;
}
add_filter('document_title_parts', 'custom_title');
?>


</head>
<?php get_header(); ?>
<section class="top">
    <div class="top__slider">
        <div class="image">
            <img src="<?= home_url() ?>/wp-content/uploads/Main/404-0.png" width="189" height="255" alt="">
        </div>

    </div>
</section>

<section class="main">
    <div class="container">
        <h2>Такой страницы не существует ☹</h2>
    </div>
</section>
<?php get_footer(); ?>
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
</script>