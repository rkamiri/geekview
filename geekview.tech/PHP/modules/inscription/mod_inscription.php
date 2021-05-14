<?php 
	require_once 'cont_inscription.php';	
	class modInscription
	{
		function __construct()
 	    {
     		$ctrl = new contInscription();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		$ctrl->register();
 	    }
	}
?>