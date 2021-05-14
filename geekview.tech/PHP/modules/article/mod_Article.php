<?php 
	require_once 'cont_Article.php';	
	class modArticle 
	{
		function __construct($idArticle)
 	    {
 	        if(isset($idArticle)){
         		$ctrl = new contArticle();
         		$action = isset($_GET['action']) ? $_GET['action']:null;
         	    $ctrl -> AfficheArticle($idArticle);
        	}
        	else{
        	    die('Erreur 403 : Accès refusé');
        	}
 	    }
	}
?>