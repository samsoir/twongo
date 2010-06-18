<?php
class tweet {

	private $doc_id;
	private $data;
	
	public static function create ($raw_object) {
		$db = mongoconnection::instance();
		$db->tweets->insert($raw_object);
	}
	
	public function __construct ($doc_id, $data = null) {
	
		$this->doc_id = new MongoId($doc_id);
	
		if (is_null($data)) {
			$db = mongoconnection::instance();
			
			$tmp = $db->tweets->findOne(array('_id' => $this->doc_id));
		} else {
			$this->data = data;
		}
		
	}
	
	public function __get ($key) {
		return $this->data->$key;
	}
	
	public static function last_id () {
		$db = mongoconnection::instance();
		
		return $db->tweets->findOne(array('sort' => array('id' => 1)));
	}
	
	public static function latest($limit = 5) {
		$db = mongoconnection::instance();
		
		return $db->tweets->find()->limit($limit);
	}

}