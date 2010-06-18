<?php

class Controller_Front extends Controller {
	
	public function action_index () {
	
		$db = mongo_connection::instance();
		
		$this->request->response = View::factory('front/index')->set('tweets', new product($asin));
	
	}
	
}