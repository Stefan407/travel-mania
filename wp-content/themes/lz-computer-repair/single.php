<?php
/**
 * The template for displaying all single posts
 * @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
 */
$page_title =  $post["post_title"] . " - Travel Mania";
add_action('pre_get_document_title', function () use ($page_title) {
    return $page_title;
});
?>

<?php get_header(); ?>


<div id="post-<?php echo($post["ID"]) ?>" class="post-page" >
<div class="breadcrumbs">
	<div class="container breadcrumbs-wrap">
		<div class="breadcrumbs__block" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			<a class="breadcrumbs__link" href="/" itemprop="url" title="Главная">
				<span itemprop="title">
					<img src="/wp-content/themes/lz-computer-repair/assets/images/bread-logo.png" alt="">
					<span style='display: none'>Главная</span>
				</span>
			</a>
		</div>
		<div class="breadcrumbs__arrow">
			<img src="/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
		</div>
		<div class="breadcrumbs__block" itemscope="" itemtype="http://data-vocabulary.org/Breadcrumb">
			<a class="breadcrumbs__link" href="/blog" itemprop="url">
				<span itemprop="title">Блог</span>
			</a>
		</div>
		<div class="breadcrumbs__arrow">
			<img src="/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
		</div>
		<div class="breadcrumbs__block" itemscope itemtype="http://data-vocabulary.org/Breadcrumb">
			<link itemprop="url" href="/<?php echo ($post["post_name"]) ?>/">
			<p class="breadcrumbs__text">
				<span itemprop="title"><?php echo ($post["post_title"]) ?></span>
			</p>
		</div>
	</div>
</div>
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