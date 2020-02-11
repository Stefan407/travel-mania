<?php

/**
 * Admin template
 *
 * @link       http://wordpress.org/plugins/rate-my-post/
 * @since      2.0.0
 *
 * @package    Rate_My_Post
 * @subpackage Rate_My_Post/admin/partials
 */
?>

<div class="rmp-stats rmp-tabcontent" id="rmp-tab-5">
  <h2 class="rmp-admin-title"><?php echo ( esc_html__( 'Rate my Post Stats', 'rate-my-post' ) ); ?></h2>
  <p>
    <i>*<?php echo ( esc_html__( 'Displaying only rated posts and pages! To see feedback or change ratings click on a post/page title below and find the Rate my Post meta box at the bottom.', 'rate-my-post' ) ); ?></i>
  </p>
  <table id="rmp-table" style="width: 100%;">
    <thead>
      <tr>
        <th><?php echo ( esc_html__( 'Title', 'rate-my-post' ) ); ?></th>
        <th><?php echo ( esc_html__( 'Votes', 'rate-my-post' ) ); ?></th>
        <th><?php echo ( esc_html__( 'Average Rating', 'rate-my-post' ) ); ?></th>
        <th><?php echo ( esc_html__( 'Feedback', 'rate-my-post' ) ); ?></th>
      </tr>
    </thead>
    <tbody>
      <?php echo Rate_My_Post_Admin_Helper::stats_rows(); ?>
    </tbody>
  </table>
</div>
