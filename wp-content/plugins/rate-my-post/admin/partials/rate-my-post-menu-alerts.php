<?php

/**
 * Admin template
 *
 * @link       http://wordpress.org/plugins/rate-my-post/
 * @since      2.1.0
 *
 * @package    Rate_My_Post
 * @subpackage Rate_My_Post/admin/partials
 */
?>

<?php if ( !current_user_can( 'manage_options' ) ): ?>
<div id="rmp-alerts">
  <h2 class="rmp-alert-title">Notice:</h2>
  <?php if ( !current_user_can( 'manage_options' ) ): ?>
  <p class="rmp-alert-item">
    - <?php echo ( esc_html__( 'You need to be logged in as administrator to save settings for Rate my Post plugin', 'rate-my-post' ) ); ?>.
  </p>
  <?php endif; ?>
  <!-- Here we also want to check if jquery has been deregistered by any chance but it seems that is_script function is not the right way to do it -->
</div>
<?php endif; ?>
