<?php
class tweet {

	public static function create ($json) {
		$db = mongoconnection::instance();
		$db->tweets->insert($json);
	}

}