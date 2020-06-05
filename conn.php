<?php 

	class conn{
		
		public function conn() {
			
			if ($connect = new mysqli('localhost', 'test', 'root', '')) {
				
				echo 'Connected!';
				
			} else {
				
				echo 'failed to connect!';
				
			};
			
		}
		
	}

$obj = new conn();

?>