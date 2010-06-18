<?php
class mongoconnection {

	public static function instance () {
		static $link = null;
		
		if (is_null($link)) {
			try {
				$link = new Mongo();
			} catch (MongoConnectionException $e) {
				die('Could not connect. Check to make sure MongoDB is running.');
			}
		}
		
		$db = Kohana::config('mongo_connection.database');
		
		return $link->$db;
	}

}