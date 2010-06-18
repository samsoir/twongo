<?php

class Controller_Front extends Controller {

	
	public function action_index () {
	
		$db = mongoconnection::instance();
		
		$this->request->response = View::factory('front/index')->set('tweets', tweet::lastest(5));
	
	}	
}