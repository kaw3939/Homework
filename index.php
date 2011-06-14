<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
      "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">

<html xmlns="http://www.w3.org/1999/xhtml">

<head>

<title>Conforming XHTML 1.0 Strict Template</title>

</head>

<body>
<a href="index.php?userid=sandy&page=homepage">Sandy's Homepage</a><br>
<a href="index.php?name=steve&page=page1">steve's data</a><br>
<a href="http://www.google.com">Google</a>
<?php 
	function __autoload($class_name) {
    	include $class_name . '.php';
	}

	$output = new request();
	setcookie("name","data want to store as a cookie again",time()+3600);
	echo $_COOKIE['name'];


	session_start(); 
	$_SESSION['views'] = 1; // store session data
	echo "Pageviews = ". $_SESSION['views']; //retrieve data
		if(isset($_SESSION['views'])){
    		$_SESSION['views'] = $_SESSION['views']+ 1;
    		echo '<br>';}
		else
    		$_SESSION['views'] = 1;
		echo "views = ". $_SESSION['views'];


?>

<form action="index.php" method="post">
<p>Your Name: <input type="text" name="yourname" /><br />
E-mail: <input type="text" name="email" /></p>

<p>Do you like this website?
<input type="radio" name="likeit" value="Yes" checked="checked" /> Yes
<input type="radio" name="likeit" value="No" /> No
<input type="radio" name="likeit" value="Not sure" /> Not sure</p>

<p>Your comments:<br />
<textarea name="comments" rows="10" cols="40"></textarea></p>

<p><input type="submit" value="Send it!"></p>
</form>



</body>
</html>

