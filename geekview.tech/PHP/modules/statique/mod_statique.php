<?php 
	require_once 'cont_statique.php';	
	class modStatique 
	{
		function __construct()
 	    {
     	    $ctrl = new contStatique();
     	    $action = isset($_GET['action']) ? $_GET['action']:null;
     	         switch ($action) {
                    case 'viePrivee':
                         $ctrl->getViePrivee();
                         break;
                    case 'cgu':
                         $ctrl->getCgu();
                         break;
     			default:
     			     break;
     		}
    	}
	}
?>