<?php
	class request {
				
		function __construct() {
			switch ($_SERVER['REQUEST_METHOD']) {
 			   case 'GET':
        		$this->get_handler($_GET);
        		break;
    		   case 'POST':
        		$this->post_handler($_POST);
        	    break;
    		   default:
       			echo "I'm not meant to be seen";
			}
		}
		function get_handler($_GET) {

        	if($_GET['name'] == 'steve') {echo 'hello steve';}	
        	if($_GET['name'] == 'sandy') {echo 'hello sandy';}

			print_r($_GET);
		}
		function post_handler($_POST) {
			echo "I'm a Post";
			print_r($_POST);
		}
	
	}

?>