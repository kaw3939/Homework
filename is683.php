<?php
ini_set('display_errors', 'On');

$username = 'kwilliams';
$password = 'mongo1234';
$connection = new Mongo("mongodb://${username}:${password}@localhost/test",array("persist" => "x"));


$db = $connection->articles;
$collection = $db->article;

$title = 'I love MongoDB';
$summary = 'some summary';
$body = 'I think MongoDB is going to replace SQL in many situations';
$created = '5/29/2011';
$updated = 'never';
$author = 'Keith Williams';
$tags = 'mongodb, databases, nosql, sql';
$published = 'TRUE';

$article_data = array('title' => $title, 
					  'summary' => $summary, 
					  'body' => $body, 
					  'author' => $author, 
					  'tags' => $tags,
					  'created' => $created, 
					  'updated' => $updated);


$article_status = array('published' => $published);


$article = array('article_data' => $article_data,
				 'article_status' => $article_status);


//print_r($article);

	$tag = 'h1' 
	$content = $article['article_data']['title'];
	$attributes = ('class' => 'title');
	$tag = 'summary'; 
	$content = $article['article_data']['summary'];
	$attributes = ('class' => 'summary');
	

//$obj = $article;

//$collection->insert($obj);
//print_r($obj);
//$cursor = $collection->find();
//$cursor = $collection->findOne(array('_id' => new MongoId('4de2f4741ce31ee34e000002')));
//$cursor = $collection->findOne(array('title' => 'I love MongoDB'));

//print_r($cursor);
/*
foreach($cursor as $key => $value) {
	if(!is_array($key)) {
		echo $key . ' ' . $value;
	}
}
*/


?>
