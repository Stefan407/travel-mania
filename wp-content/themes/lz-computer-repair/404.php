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
<section class="top" style="display: flex;justify-content: center;">
    <img src="<?= home_url() ?>/wp-content/uploads/Main/404-0.png"  alt="">
</section>

<section class="main">
    <div class="container">
        <h2>Такой страницы не существует ☹</h2>
    </div>
</section>
<?php get_footer(); ?>