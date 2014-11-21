<?php

function MongoInsert($query){
	require 'MongoDBConn.php';
	$param = json_decode($query);
	try {
		$collection->insert($param);
		} catch(MongoCursorException $e) {
			echo "Cant insert twice";
		}
};

function MongoLogin($query) {
		require 'MongoDBConn.php';
		
		$param = json_decode($query);
		$cursor = $collection->find($param);
		$return = array();
		$i=0;
	    while ($cursor->hasNext())
		{
		$userID = $cursor->getNext();
		$return[$i++] = $userID['userID'];
	    }
		echo json_encode($return);
		
		
		
};	
function MongoRFPInsert($Id,$query){
		require 'MongoDBConn.php';
		$collection->update(
			array('User.userId' => $Id),
			//array('_id.$oid' => $Id),			
			array('$push' => json_decode($query)),
			array('upsert'=>false)
		);
		
	
};

function MongoResponseInsert($Id,$RfpNum,$query){
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
			array('User.rfp.userId' => $Id,),
			//array('_id.$oid' => $Id),			
			array('$push' => json_decode($query)),
			array('upsert'=>false)
		);
		
	
};

?>