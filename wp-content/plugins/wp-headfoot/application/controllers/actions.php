<?php
class headfoot_actions extends wv48fv_action {	
	public function send_headersWPaction() {
		$headers = explode ( "\n", $this->application()->data ()->http ['header'] );
		foreach ( $headers as $header ) {
			$header = trim ( $header );
			if ($header != "") {
				header ( $header );
			}
		}
	}
	public function wp_headWPaction() {
		echo $this->application()->data ()->blog ['header'];
	}
	public function loop_startWPaction($wp_query) {
		global $wp_the_query;
		if ($wp_query === $wp_the_query && ! is_admin ()) {
			echo $this->application()->data ()->content ['header'];
		}
	}
	
	public function loop_endWPaction($wp_query) {
		global $wp_the_query;
		if ($wp_query === $wp_the_query && ! is_admin ()) {
			echo $this->application()->data ()->content ['footer'];
		}
	}
	
	public function wp_footerWPaction() {
		echo $this->application()->data ()->blog ['footer'];
	}
}
		