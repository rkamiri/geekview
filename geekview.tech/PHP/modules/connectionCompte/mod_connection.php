<?php 
	require_once 'cont_connection.php';	
	class modConnection
	{
		function __construct()
 	    {
     		$ctrl = new contConnection();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		switch ($action) {
     			case 'connection':
     				$ctrl->connection();
     				echo '<meta http-equiv="refresh" content="1;url=https://geekview.tech/"/>';	
     				break;
     			default:
                    $ctrl->getaff();
     				break;
     		}
    	}
	}
?>