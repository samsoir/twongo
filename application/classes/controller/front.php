<?php

class Controller_Front extends Controller {

	
	public function action_index () {	
		$db = mongoconnection::instance();

		$this->request->response->body = (string) View::factory('front/index')->set('tweets', tweet::latest(5));
	}	
}