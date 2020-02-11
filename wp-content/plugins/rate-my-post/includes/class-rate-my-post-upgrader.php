<?php

/**
 * Fired on plugins loaded
 *
 * @link       http://wordpress.org/plugins/rate-my-post/
 * @since      2.0.0
 *
 * @package    Rate_My_Post
 * @subpackage Rate_My_Post/includes
 */

class Rate_My_Post_Upgrader {
    //Runs on plugins loaded
	public static function upgrade() {
		//check if upgrade is required
    if ( RATE_MY_POST_VERSION !== get_option( 'rmp_version' ) ) {
      //OPTIONS
      //required options
      $default_options = Rate_My_Post_Admin_Helper::default_options();
      //database options
      $database_options = get_option( 'rmp_options' );

      //compare default and database options
      if( is_array( $default_options ) && is_array( $database_options ) ) {
        foreach ($default_options as $key => $value) {
          if( !array_key_exists( $key,$database_options ) ) {
            $database_options[$key] = $default_options[$key];
          }
        }
        //add new options
        update_option( 'rmp_options', $database_options );
      }

      //CUSTOMIZATION
      //required customization
      $default_customization = Rate_My_Post_Admin_Helper::default_customization();
      //database customization
      $database_customization = get_option( 'rmp_customize_strings' );

      //compare default and database customization
      if( is_array( $default_customization ) && is_array( $database_customization ) ) {
        foreach ($default_customization as $key => $value) {
          if( !array_key_exists( $key,$database_customization ) ) {
            $database_customization[$key] = $default_customization[$key];
          }
        }
        //add new customization
        update_option( 'rmp_customize_strings', $database_customization );
      }

			//SECURITY OPTIONS
			//required security options
			$default_security_options = Rate_My_Post_Admin_Helper::security_options();
			//database security options
			$database_security_options = get_option( 'rmp_security' );
			//compare default and database security options
			if( is_array( $default_security_options ) && is_array( $database_security_options ) ) { //security options already exist - updating from version higher than 2.4.0
        foreach ($default_security_options as $key => $value) {
          if( !array_key_exists( $key,$database_security_options ) ) {
            $database_security_options[$key] = $default_security_options[$key];
          }
        }
        //add new security options
        update_option( 'rmp_security', $database_security_options );
      } else { //no security options present - adding them for the first time
				update_option( 'rmp_security', $default_security_options );
			}

      //UPDATE VERSION
      update_option( 'rmp_version', RATE_MY_POST_VERSION );

    } //end of upgrade required

  }
}
