<?php
	/**
	* 
	*/
	class VueGenerique
	{
		
		function __construct()
		{
			ob_start();
		}

		public function getaff()
		{
			return ob_get_clean();
		}
	}
?>