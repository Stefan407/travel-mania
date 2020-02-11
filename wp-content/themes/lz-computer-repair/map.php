<?php 
/*
Template Name: map-page
* @package WordPress
 * @subpackage lz-computer-repair
 * @since 1.0
 * @version 0.1
*/
?>
<?php query_posts('showposts=1000'); ?>
<?php while (have_posts()) : the_post(); ?>
<li>
    <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
    <span class="time"><?php the_time('d.m.Y') ?></span>
</li>
<?php endwhile;?>




<?php query_posts('showposts=1000'); ?>
<?php while (have_posts()) : the_post(); ?>
<li><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></li>
<?php endwhile;?>