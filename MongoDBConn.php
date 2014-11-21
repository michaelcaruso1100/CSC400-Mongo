<?PHP
//Database Connection Info
	try{
			$connection = new MongoClient( "mongodb://database:csc400@ds039960.mongolab.com:39960/csc400" ); // connect to a remote host at a given port
			$db = $connection->csc400;
			$collection = $db->selectCollection('VRMusers');
			$collection2 = $db->selectCollection('RFPnRES');
	} catch( Exception $e ) {
    // This should Fix the Pooling Error on connections
    $MaxRetries = 5;
    for( $Counts = 1; $Counts <= $MaxRetries; $Counts ++ ) {
        try {
			$connection = new MongoClient( "mongodb://database:csc400@ds039960.mongolab.com:39960/csc400" ); // connect to a remote host at a given port
			$db = $connection->csc400;
			$collection = $db->selectCollection('VRMusers');
			$collection2 = $db->selectCollection('RFPnRES');
        } catch( Exception $e ) {
            continue;
        }
        return;
    }
}
?>