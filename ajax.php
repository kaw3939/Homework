<?php

$username = 'kwilliams';
$password = 'mongo1234';
$connection = new Mongo("mongodb://${username}:${password}@localhost",array("persist" => "x"));


$db = $connection->thoughtfarm;
$collection = $db->pages1;

$id = $_REQUEST['_id'];



$page = array('url' => 'about', 'title' => 'About', 'body' => 'some body text');
$insert = $_POST;

switch ($_SERVER['REQUEST_METHOD']) {

	case 'GET':
		$article = $collection->findOne(array('_id' => new MongoId($_GET['_id'])));
		echo json_encode($article);
		break;	
	case 'POST':
		
		$collection->insert($insert);
		echo json_encode($insert);
		break;
	
}


//$collection->insert($page);
//$article = $collection->findOne(array('_id' => new MongoId($id)));
//$article = $collection->findOne(array('title' => 'About')); 
//print_r(object_to_array($article['_id']));





switch ($_GET['page']) {
    case 'about':
        $article = array('title' => 'About', 'body' => 'Jeff Sucks');
        break;
    case 'portfolio':
        $article = array('title' => 'About', 'body' => 'Some information about our portfolio');
        break;
    case 'team':
        $article = array('title' => 'About', 'body' => 'Some information about our team');
        break;
    case 'packages':
        $article = array('title' => 'About', 'body' => 'Some information about our packages');
        break;
    case 'processes':
        $article = array('title' => 'About', 'body' => 'Some information about our processes');
        break;
}





?>