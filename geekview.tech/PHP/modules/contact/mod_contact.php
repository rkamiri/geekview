<?php 
	require_once 'cont_contact.php';	
	class modContact 
	{
		function __construct()
 	    {
     		$ctrl = new contContact();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		switch ($action) {
     		    case 'sendMail':
     		        $success=$ctrl->sendMail();
     		        $ctrl->getAff($success);
     		        $_POST=array();
     		        $_SESSION['response']=$success;
     		        header('Location: https://geekview.tech/?module=contact');
     		        
                    break;
     			default:
                    $ctrl->getAff(NULL);
     			    break;
     		}
    	}
	}
?>