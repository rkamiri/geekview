<?php 
	require_once 'cont_NlAbo.php';	
	class modNlAbo 
	{
		function __construct()
 	    {
     		$ctrl = new contNlAbo();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		switch ($action) {
     			case 'insertNlAbo':
     				if($ctrl->insertNlAbo()){
     				    $ctrl-> afficheOk('Vous venez de vous abonner à la newsletter');
     				}
     				else $ctrl -> AfficheErreur("L'adresse mail existe déja");
     				break;
     			case 'removeNlAbo':
     				if($ctrl->removetNlAbo()){
     				    $ctrl-> afficheOk('Vous avez bien été désabonné de la newsletter');
     				}
     				else $ctrl -> AfficheErreur("Impossible de trouver L'adresse mail");
     				break;
     			default:
     				break;
     		}
    	}
	}
?>