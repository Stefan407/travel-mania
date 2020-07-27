<?php

/**
 * The template for displaying all post page
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


<div id="post-<?php echo ($post["ID"]) ?>" class="post-page">
	<div class="breadcrumbs" itemscope="itemscope" itemtype="http://schema.org/BreadcrumbList">
		<div class="container breadcrumbs-wrap">
			<div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
				<a class="breadcrumbs__link" href="/" itemprop="item">
					<span itemprop="name">Главная</span>
					<meta itemprop="position" content="1">
				</a>
			</div>
			<div class="breadcrumbs__arrow">
				<img src="<?= home_url() ?>/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
			</div>
			<div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
				<p class="breadcrumbs__text">
					<span itemprop="name">Блог</span>
					<meta itemprop="item" content="<?= home_url() ?>blog/">
					<meta itemprop="position" content="2">
				</p>
			</div>
			<div class="breadcrumbs__arrow">
				<img src="/wp-content/themes/lz-computer-repair/assets/images/arrow-bread.png" alt="">
			</div>
			<div class="breadcrumbs__block" itemprop="itemListElement" itemscope="itemscope" itemtype="http://schema.org/ListItem">
				<p class="breadcrumbs__text">
					<meta itemprop="item" content="<?= home_url() ?>/<?php echo ($post["post_name"]) ?>">
					<span itemprop="name"><?php echo ($post["post_title"]) ?></span>
					<meta itemprop="position" content="3">
				</p>
			</div>
		</div>
	</div>
	<div class="single-post container">
		<div class="article-text">
			<h1 class="single-post"><?php echo ($post["post_title"]) ?> </h1>
			<div class="content-post ">
				<?php echo ($post["post_content"]) ?>
			</div>
		</div>
	</div>
</div>

<?php get_footer(); ?>