<?php
ini_set('display_errors', 'On');

$username = 'kwilliams';
$password = 'mongo1234';
$connection = new Mongo("mongodb://${username}:${password}@localhost/test",array("persist" => "x"));


$db = $connection->wha3f7sot;
$collection = $db->evendsss;


//print_r($obj);


$somearray = array('name' => 'keith','Last Name' => 'Williams', 'address' => '58 Clark Ct', 'country' => 'Brazil');
$obj = $somearray;
$collection->insert($obj);

//$cursor = $collection->findOne(array('_id' => new MongoId('4ddbecc61ce31e340b000000')));
//print_r($cursor);
$cursor = $collection->find();
foreach ($cursor as $id => $record) {
	echo $id . '</br>';
	     foreach ($record as $field => $value) { 
	     	if($field != '_id'){
	     		echo $field . ': ' . $value;
	     		echo '</br>';
	     	}
	     	if(is_array($value)){
	     		foreach($value as $subkey => $subvalue) {
	     			echo $subkey . ': ' . $subvalue;		
	     		}
	     	}
	     }

    echo '</p>';
}
echo json_encode($cursor);

?>