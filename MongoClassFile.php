<?php
/*
class MongoInsert{
	private $query;
	
	public function _construct($query) {
		$this->query = $query;
	}
*/	
    function MongoInsert($query){
	try
		{		
			$connection = new MongoClient( "mongodb://database:csc400@ds039960.mongolab.com:39960/csc400" ); // connect to a remote host at a given port
			$db = $connection->csc400;
			$collection = $db->selectCollection('MikePTest');
			$collection = $db->selectCollection('MikePTest');

		}
	catch(MongoConnectionException $e)
		{
			die("Failed to connect to Database ".$e->getMessage());
		}
	$param = json_decode($query);

	try {
		$collection->insert($param);
		return "1";
		} catch(MongoCursorException $e) {
			return "0";
		}
	
	
	};
	
	function MongoRFPInsert($Id,$query){
		try
		{		
			$connection = new MongoClient( "mongodb://database:csc400@ds039960.mongolab.com:39960/csc400" ); // connect to a remote host at a given port
			$db = $connection->csc400;
			$collection = $db->selectCollection('MikePTest');

		}
	catch(MongoConnectionException $e)
		{
			die("Failed to connect to Database ".$e->getMessage());
		}
		$collection->update(
			array('User.userId' => $Id),
			//array('_id' => $Id);
			array('$set' => json_decode($query)),
			array('upsert'=>false)
		);
		
	
};

?>