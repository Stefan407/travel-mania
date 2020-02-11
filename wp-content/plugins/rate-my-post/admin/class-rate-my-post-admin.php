<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       http://wordpress.org/plugins/rate-my-post/
 * @since      2.0.0
 *
 * @package    Rate_My_Post
 * @subpackage Rate_My_Post/admin
 */
 // require helper class to avoid messy code
require_once plugin_dir_path( __FILE__ ) . 'inc/class-rate-my-post-admin-helper.php';
// The admin functionality of the plugin
class Rate_My_Post_Admin {

	// Rate My Post - string
	private $rate_my_post;

	//Plugin current version - string
	private $version;

	// Initialize
	public function __construct( $rate_my_post, $version ) {
		$this->rate_my_post = $rate_my_post;
		$this->version = $version;
	}

	//---------------------------------------------------
	// REGISTER AND ENQUEUE ADMIN CSS
	//---------------------------------------------------
	// Register and enqueue the admin css
	public function enqueue_styles() {
		wp_register_style( $this->rate_my_post, plugin_dir_url( __FILE__ ) . 'css/rate-my-post-admin.css', array(), $this->version, 'all' );
		wp_register_style( 'rmp-data-tables-css', plugin_dir_url( __FILE__ ) . 'lib/jquery.dataTables.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( $this->rate_my_post );
		wp_enqueue_style( 'rmp-data-tables-css' );
	}

	//---------------------------------------------------
	// REGISTER AND ENQUEUE ADMIN JS
	//---------------------------------------------------
	// Register and enqueue the admin js
	public function enqueue_scripts() {
		wp_register_script( 'rmp-data-tables-js', plugin_dir_url( __FILE__ ) . 'lib/jquery.dataTables.min.js', array( 'jquery' ), $this->version, false );
		wp_register_script( $this->rate_my_post, plugin_dir_url( __FILE__ ) . 'js/rate-my-post-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'rmp-data-tables-js' );
		wp_enqueue_script( $this->rate_my_post );
		//localize script for ajax
		wp_localize_script(
      $this->rate_my_post,
      'rmp_backend_update',
       array(
         'admin_ajax' 				=> admin_url( 'admin-ajax.php' ),
         'postID'     				=> get_the_id(),
				 'save'       				=> ( esc_html__( 'Saving', 'rate-my-post' ) ),
         'resetConfirm'       => ( esc_html__( 'Are your sure you want to reset the settings?', 'rate-my-post' ) ),
				 'resetConfirm'       => ( esc_html__( 'Are your sure you want to reset the customization options?', 'rate-my-post' ) ),
				 'nonce'       				=> wp_create_nonce( 'rmp_admin_save' ),
        )
      );
	}

	//---------------------------------------------------
	// META BOX - ALLOWS RESULTS UPDATE IN BACKEND
	//---------------------------------------------------
	public function manipulate_rating_meta_box() {
		add_meta_box( 'rmp-rate-id', 'Rate my Post', array( $this, 'display_metabox' ), Rate_My_Post_Admin_Helper::define_post_types() );
	}

	public function display_metabox() {
		ob_start();
    include_once plugin_dir_path( __FILE__ ) . 'partials/rate-my-post-meta-box.php';
		echo ob_get_clean();
	}

	//---------------------------------------------------
	// ADMIN OR AUTHOR UPDATE RESULTS - AJAX
	//---------------------------------------------------
	public function backend_results_update() {
	  if ( wp_doing_ajax() && current_user_can( Rate_My_Post_Admin_Helper::required_manipulate_capability() ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
	    $newVotes = intval( $_POST['votes'] );
	    $newSum = intval( $_POST['sum'] );
	    $newAvg = intval( ceil( $_POST['avg'] ) );
	    $postID = intval( $_POST['postID'] );
	    //update votes
	    if( $newAvg > 1 && $newAvg < 6 || $newAvg === 0 && $newVotes === 0 && $newSum === 0) {
	      if ( ! add_post_meta( $postID, 'rmp_vote_count', $newVotes, true ) ) {
	        update_post_meta( $postID, 'rmp_vote_count', $newVotes );
	      }
	      if ( ! add_post_meta( $postID, 'rmp_rating_val_sum', $newSum, true ) ) {
	        update_post_meta( $postID, 'rmp_rating_val_sum', $newSum );
	      }
	      echo esc_html__( 'Number of votes and sum of ratings successfully updated!', 'rate-my-post');
	    } else {
	      echo esc_html__( 'Update failed - please try again!', 'rate-my-post');
	    }
	  } else { //no permission to update
			echo esc_html__( 'You do not have permission to manipulate ratings!', 'rate-my-post' );
		}
	  die();
	}

	//---------------------------------------------------
	// DELETE FEEDBACK - AJAX
	//---------------------------------------------------
	public function delete_feedback() {
	  if ( wp_doing_ajax() && current_user_can( Rate_My_Post_Admin_Helper::required_manipulate_capability() ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
	    $postID = intval( $_POST['postID'] );
	    //delete feedback
			delete_post_meta( $postID, 'rmp_feedback_val' );
			delete_post_meta( $postID, 'rmp_feedback_val_new' );
	    echo esc_html__( 'Feedback successfully deleted!', 'rate-my-post');
	  } else { //no permission to delete
			echo esc_html__( 'You do not have permission to delete feedback!', 'rate-my-post' );
		}
	  die();
	}

	//---------------------------------------------------
	// INDIVIDUALLY DELETE FEEDBACK - AJAX - SINCE 2.7.0
	//---------------------------------------------------
	public function individually_delete_feedback() {
	  if ( wp_doing_ajax() && current_user_can( Rate_My_Post_Admin_Helper::required_manipulate_capability() ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
	    $postID = intval( $_POST['postID'] );
			$feedbackID = sanitize_text_field( $_POST['feedbackID'] );

			$feedback = get_post_meta( $postID, 'rmp_feedback_val_new', true );

			if( is_array( $feedback ) && !empty( $feedback ) ) {
				foreach ( $feedback as $key => $value ) {
					if( $value['id'] == $feedbackID ) { //remove this feedback from array
						unset( $feedback[$key] );
					}
				}
			}
			update_post_meta( $postID, 'rmp_feedback_val_new', $feedback );

	    echo $feedbackID;
	  } else { //no permission to delete
			echo esc_html__( 'You do not have permission to delete feedback!', 'rate-my-post' );
		}
	  die();
	}

  //---------------------------------------------------
  // MENU SECTION
  //---------------------------------------------------
  public function menu_section() {
    add_menu_page( 'Rate my Post', 'Rate my Post', 'edit_posts', 'rate-my-post', array($this, 'menu_section_display'), 'dashicons-thumbs-up', 24 );
  }

  public function menu_section_display(){
    ob_start();
    include_once plugin_dir_path( __FILE__ ) . 'partials/rate-my-post-menu-master.php';
		echo ob_get_clean();
  }

  //---------------------------------------------------
  // UPDATE OPTIONS
  //---------------------------------------------------
  public function options_update() {
    //only admin can update options
    if ( wp_doing_ajax() && current_user_can( 'manage_options' ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
      //default options
      $deafult_options = Rate_My_Post_Admin_Helper::default_options();
			//check if POST array and default_options array have the same number of elements to avoid cache issues on update
			if ( count( $deafult_options ) !== count( $_POST ) - 2 ) { //action and nonce in post request do not count
				echo esc_html__( 'Error saving settings! Try clearing all caches, including your browser cache!', 'rate-my-post' );
				die(); //do not proceed
			}
      //we store new options in array
      $updated_options = array();
      //compare sent options via ajax to default options and generate an array if they match
      //IMPORTANT - AJAX KEYS MUST MATCH KEYS IN DATABASE
      foreach( $_POST as $key => $value ) {
        if ( array_key_exists( $key, $deafult_options ) ) {
          //sanitize options before saving them
          $value = Rate_My_Post_Admin_Helper::sanitize_options($key, $value);
          //push new options to array
          $updated_options[$key] = $value;
        }
      }
      //update options
      update_option( 'rmp_options', $updated_options );
      //successfully updated
      echo esc_html__( 'Settings Saved', 'rate-my-post' );
    } else { //user does not have permission or not oding ajax
      echo esc_html__( 'You do not have permission to update settings for this plugin!', 'rate-my-post' );
      }
    die();
  }

  //---------------------------------------------------
  // RESET OPTIONS
  //---------------------------------------------------
  public function options_reset() {
    //only admin can update options
    if ( wp_doing_ajax() && current_user_can( 'manage_options' && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) ) {
      delete_option( 'rmp_options' );
      $default_options = Rate_My_Post_Admin_Helper::default_options();
      add_option( 'rmp_options', $default_options );
      echo esc_html__( 'Settings Reset Done', 'rate-my-post' );
    } else {
      echo esc_html__( 'You do not have permission to update settings for this plugin!', 'rate-my-post' );
    }
    die();
  }

  //---------------------------------------------------
  // UPDATE CUSTOMIZATION
  //---------------------------------------------------
  public function customization_update() {
    //only admin can update customization options
      if ( wp_doing_ajax() && current_user_can( 'manage_options' ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
        //default customization
        $default_customization = Rate_My_Post_Admin_Helper::default_customization();
				//check if POST array and $default_customization array have the same number of elements to avoid cache issues on update
				if ( count( $default_customization ) !== count( $_POST ) - 2 ) { //action and nonce in post request do not count
					echo esc_html__( 'Error saving settings! Try clearing all caches, including your browser cache!', 'rate-my-post' );
					die(); //do not proceed
				}
        //we store new customization in array
        $updated_customization = array();
        //compare sent customization via ajax to default customization and generate an array if they match
        //IMPORTANT - AJAX KEYS MUST MATCH KEYS IN DATABASE
        foreach( $_POST as $key => $value ) {
          if ( array_key_exists( $key,$default_customization ) ) {
            //sanitize customization before saving it
            $value = Rate_My_Post_Admin_Helper::sanitize_customization($key, $value);
            //push new customization to array
            $updated_customization[$key] = $value;
          }
        }

        update_option( 'rmp_customize_strings', $updated_customization );
        echo esc_html__( 'Settings Saved', 'rate-my-post' );
      } else { //does not have permission or not doing ajax
        echo esc_html__( 'You do not have permission to update settings for this plugin!', 'rate-my-post' );
      }
    die();
  }

  //---------------------------------------------------
  // RESET CUSTOMIZATION
  //---------------------------------------------------
  public function customization_reset() {
    //only admin can update customization options
    if ( wp_doing_ajax() && current_user_can( 'manage_options' ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
      delete_option('rmp_customize_strings');
      $default_customization = Rate_My_Post_Admin_Helper::default_customization();
      add_option( 'rmp_customize_strings', $default_customization );
      echo esc_html__( 'Customization Options Reset Done', 'rate-my-post' );
    } else {
      echo esc_html__( 'You do not have permission to update settings for this plugin!', 'rate-my-post' );
    }
    die();
  }

	//---------------------------------------------------
  // UPDATE SECURITY OPTIONS
  //---------------------------------------------------
	public function security_update() {
		//only admin can update options
		if ( wp_doing_ajax() && current_user_can( 'manage_options' ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
			//default security
			$default_security = Rate_My_Post_Admin_Helper::security_options();
			//check if POST array and default_options array have the same number of elements to avoid cache issues on update
			if ( count( $default_security ) !== count( $_POST ) - 2 ) { //action and nonce in post request do not count
				echo esc_html__( 'Error saving security settings! Try clearing all caches, including your browser cache!', 'rate-my-post' );
				die(); //do not proceed
			}
			//we store new options in array
			$updated_security = array();
			//compare sent options via ajax to default options and generate an array if they match
			//IMPORTANT - AJAX KEYS MUST MATCH KEYS IN DATABASE
			foreach( $_POST as $key => $value ) {
				if ( array_key_exists( $key, $default_security ) ) {
					//sanitize options before saving them
					$value = Rate_My_Post_Admin_Helper::sanitize_security($key, $value);
					//push new options to array
					$updated_security[$key] = $value;
				}
			}
			//update options
			update_option( 'rmp_security', $updated_security );
			//successfully updated
			echo esc_html__( 'Security Settings Saved', 'rate-my-post' );
		} else { //user does not have permission or not oding ajax
			echo esc_html__( 'You do not have permission to update security settings for this plugin!', 'rate-my-post' );
			}
		die();
	}

	//---------------------------------------------------
  // HIDE RATE MY POST CUSTOM FIELDS IN EDIT POST SECTION
  //---------------------------------------------------
	//this is necessary otherwise ratings get reverted on post uupdate
	public function hide_custom_fields( $protected, $meta_key ) {
		if ( $meta_key === 'rmp_feedback_val' || $meta_key === 'rmp_rating_val_sum' || $meta_key === 'rmp_vote_count' ) {
			return true;
		} else {
			return $protected;
		}
	}

	//---------------------------------------------------
  // REGISTER WIDGETS
  //---------------------------------------------------

	public function register_widgets() {
		 register_widget( 'Rate_My_Post_Top_Rated_Widget' );
	}

	//---------------------------------------------------
  // MIGRATION TOOLS - AJAX
  //---------------------------------------------------

	public function migration_tools() {
		if ( wp_doing_ajax() && current_user_can( 'manage_options' ) && wp_verify_nonce( $_POST['nonce'], 'rmp_admin_save' ) ) {
			//run migration
			if ( class_exists( 'BhittaniPlugin_kkStarRatings' ) ) { //kk star ratings exist
				//migrate get number of affected posts
				$migratedPosts = $this->simple_migratation( '_kksr_ratings', '_kksr_casts', 'simple' );
				//verify migration
				echo $this->verify_migration($migratedPosts);
			} elseif ( function_exists('the_ratings') ) {
				//migrate get number of affected posts
				$migratedPosts = $this->simple_migratation( 'ratings_score', 'ratings_users', 'simple' );
				//verify migration
				echo $this->verify_migration($migratedPosts);
			} elseif ( function_exists('yasr_get_visitor_votes') ) {
				$migratedPosts = $this->simple_migratation('', '', 'yasr');
				echo $this->verify_migration($migratedPosts);
			} else { //no ratings plugin found
				echo esc_html__( 'No rating plugin found! Migration is not possible!', 'rate-my-post' );
			}
		}
		die();
	}

	//verify migration
	private function verify_migration($migratedPosts) {
		if( $migratedPosts ) {
			return esc_html__( 'Migration successful! Number of posts affected', 'rate-my-post' ) . ': ' . $migratedPosts;
		} else {
			return esc_html__( 'No existing ratings found! Nothing to migrate!', 'rate-my-post' );
		}
	}

	//migrate from kk star ratings
	private function simple_migratation( $ratingsSumField, $ratingsVotesField, $type ) {
		//count how many posts were affected
	  $count = 0;

	  $args = array(
			'fields'    => 'ids',
	    'post_type' => array(
	            'post',
	            'page',
	            ),
	    'posts_per_page' => -1,
	  );

	  $the_query = new WP_Query( $args );
	  // The Loop
	  if ( $the_query->have_posts() ) {
	  	while ( $the_query->have_posts() ) {
	      $the_query->the_post();
	      $postID = get_the_id();

				if ( $type === 'simple' ) { //migration based on custom fields
		      $ratingsSum = intval( get_post_meta( $postID, $ratingsSumField, true ) );
		      $votesNumber = intval( get_post_meta( $postID, $ratingsVotesField, true ) );

		      if ( $ratingsSum && $votesNumber ) { //post is rated in kk star ratings plugin
		        $count++;
		        update_post_meta( $postID, 'rmp_rating_val_sum', $ratingsSum );
		        update_post_meta( $postID, 'rmp_vote_count', $votesNumber );
		      }
				} elseif ( $type === 'yasr' ) { //migration for yasr
					$yasrInfo = yasr_get_visitor_votes( $postID );
					if ( is_array($yasrInfo) && !empty($yasrInfo) ) {
						$yasrResultObject = $yasrInfo[0];
						$ratingsSum = intval( $yasrResultObject->sum_votes );
						$votesNumber = intval( $yasrResultObject->number_of_votes );

						if ( $ratingsSum && $votesNumber ) { //post is rated in kk star ratings plugin
			        $count++;
			        update_post_meta( $postID, 'rmp_rating_val_sum', $ratingsSum );
			        update_post_meta( $postID, 'rmp_vote_count', $votesNumber );
			      }
					}
				}

	  	} // end while
	  } // endif
	  // Reset Post Data
	  wp_reset_postdata();

	  return $count;
	}

} //end of class
