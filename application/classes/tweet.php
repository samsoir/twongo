<?php
class tweet {

	public static function create ($json) {
		$db = mongo_connection::instance();
		$db->tweets->insert($json);
	}

}