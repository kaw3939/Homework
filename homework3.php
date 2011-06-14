<?php
	
//	class filesystem { 
   		
  // 		public function hello() { 
    //  		echo "Hello"; 
   	//	} 
	
//	} 

	
	
	class main extends filesystem {
		
		function __autoload($name) {
		
			include $this . '.php';
		
		}
		function __construct() {
			
			echo 'I have constructed' . "\n";
		
		}
	
	}
	
	$new = new main();
	$new->hello();	
?>