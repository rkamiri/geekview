<?php
	require_once './PHP/connectToDB.php';
	class Modele extends connectToDB{
		function __construct(){
			self::initConnexion();
		}
		
		public function connectUser(){
    	   
    		$req=self::$bdd->prepare('select * from UtilisateurGW;' );
            $req->execute();
            return $req->fetchAll();
    	}
    	
    	/*récupère les droits de l'utilisateur 1= lecteur 2=rédacteur 3=admin*/
	    public function getDroits($pseudo){
	        $tup=array('pseudo'=>$pseudo);
	        $req=self::$bdd->prepare('select droit from UtilisateurGW where pseudo=:pseudo;' );
	        $req->execute($tup);
	        return $req->fetchAll()[0][0];
	    }
	    
	    /*Récupère les 9 derniers articles écris (date la plus récente)*/
	    public function getMainArticles($categorie){
	        if(isset($categorie)){
	            $req =self::$bdd->prepare('select idA, idU, titreA, imageAvantA, dateA, contenuA, categorieA from ArticleGW where categorieA=? ORDER BY idA DESC LIMIT 9 ');
	            $req->execute(array($categorie));
	        }
            else{
                $req =self::$bdd->prepare("select idA, idU, titreA, imageAvantA, dateA, contenuA, categorieA from ArticleGW ORDER BY idA DESC LIMIT 9");
                $req->execute();
            }
            
	        return $req->fetchAll();
	    }
	    
	}
	
	
?>