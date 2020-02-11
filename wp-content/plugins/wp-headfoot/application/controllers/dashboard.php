<?php
class headfoot_dashboard extends wv48fv_action {
	public function httpActionMeta($return) {
		$return ['priority'] = - 1;
		$return ['title']='HTTP';
		$return ['classes'] [] = 'v48fv_16x16_settings';
		return $return;
	}
	public function httpAction() {
		$this->view->title = $this->help('http')->render('HTTP');
		$this->view->data = $this->application ()->data()->post ( 'http' );
		$this->view->option='http';
		$this->view->heading = 'Headers';
		$this->view->array='header';
		$this->view->rows[] = $this->render_script('headnfoot/row.phtml');
		return $this->render_table();
	}
	public function blogActionMeta($return) {
		$return ['priority'] = - 1;
		$return ['link_name'] = 'Settings';
		$return ['classes'] [] = 'v48fv_16x16_settings';
		return $return;
	}
	public function blogAction() {
		$this->view->title = $this->help('blog')->render('Blog');
		$this->view->data = $this->application ()->data()->post ( 'blog' );
		$this->view->option='blog';
		$this->view->heading = 'Header';
		$this->view->array='header';
		$this->view->rows[] = $this->render_script('headnfoot/row.phtml');
		$this->view->heading = 'Footer';
		$this->view->array='footer';
		$this->view->rows[] = $this->render_script('headnfoot/row.phtml');
		return $this->render_table();
	}
	public function contentActionMeta($return) {
		$return ['priority'] = - 1;
		$return ['classes'] [] = 'v48fv_16x16_settings';
		return $return;
	}
	public function contentAction() {
		$this->view->title = $this->help('content')->render('Content');
		$this->view->data = $this->application ()->data()->post ( 'content' );
		$this->view->option='content';
		$this->view->heading = 'Header';
		$this->view->array='header';
		$this->view->rows[] = $this->render_script('headnfoot/row.phtml');
		$this->view->heading = 'Footer';
		$this->view->array='footer';
		$this->view->rows[] = $this->render_script('headnfoot/row.phtml');
		return $this->render_table();
	}
	public function headnfootWPmenuMeta($return) {
		$return ['title'] = $this->application()->name;
		return $return;
	}
}
		