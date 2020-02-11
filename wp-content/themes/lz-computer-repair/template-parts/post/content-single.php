<?php

/**
 * Template part for displaying  Single Posts
 * @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 1.4
 */

$page_title =  $post["post_title"] . " - Travel Mania";
add_action('pre_get_document_title', function () use ($page_title) {
    return $page_title;
});
?>

<?php get_header(); ?>


<div id="post-<?php echo($post["ID"]) ?>" class="post-page" >
  <div class="single-post">
    <div class="article-text">
      <a href="/blog" class="single-link-blog">Вернуться на страницу Блога </a>
      <h1 class="single-post"><?php echo($post["post_title"]) ?> </h1>
      <div class="content-post">
        <?php echo($post["post_content"]) ?>
      </div>
    </div>
  </div>
</div>

<?php get_footer(); ?>