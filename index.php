<?php
//interface for web page
/*
interface webpage {
	function setHeader($pageType);
	function setJquery($jquery);
	function setCSS($css);
	function getHeader();
	function getJquery();
	function getCSS();
}
*/
//Interface for article
interface webpage 
{
	public function getTitle();
	public function setTitle($title);
	public function getBody();
	public function setBody($body);
}
class node implements webpage
{
	private $title;
	private $body;
	
	// sets the title of the article
	public function setTitle($title) {
        	$this->title = $title;
	}

	// gets the title of the article 
	public function getTitle() {
    		return $this->title;
 	}
	// gets the body of the article	
	public function getBody() {
		return $this->body;
	}
	public function setBody($body) {
		$this->body = $body;
	}
} 
$a = new node();
$a->setTitle('keith');
$a->setBody('body');

echo '<h1>' . $a->getTitle() . '</h1>';
echo '<p>' . $a->getBody() . '</p>';
$filename = 'js/myscript.js';

if (file_exists($filename)) {
    echo "The file $filename exists";
} else {
    echo "The file $filename does not exist";
}

?>
