<?php  
class ModeleArticle extends connectToDB{

	function __construct()
	{
		self::initConnexion();
	}

    /*récupère un article par son ID*/
	public function getArticle($idArticle)
	{
	   try{
	    $tup=array('idA'=>$idArticle);
    	$req = self::$bdd->prepare('select * from ArticleGW where idA=:idA;' );
    	$req->execute($tup);
        $tab = $req->fetchAll();
    	return $tab;
	   }catch(PDOException $Exception){
	       return false;
	   }
	}
	
	/*récupère les 15 derniers commentaires écris sur un article (par date la plus récente)*/
	public function getCommentaires($idArticle){
	   try{
	    $tup=array('idA'=>$idArticle);
    	$req = self::$bdd->prepare('select idA, idU, dateC, texte, pseudo from Commenter natural join UtilisateurGW where idA=:idA ORDER BY dateC desc limit 15 ;' );
    	$req->execute($tup);
        $tab = $req->fetchAll();
    	return $tab;
	   }catch(PDOException $Exception){
	       return NULL;
	   }
	}
    
    /*récupère l'id du rédacteur de l'article*/	
	public function getCreateur($idCrea){
	     try{
	    $tup=array('idU'=>$idCrea);
    	$req = self::$bdd->prepare('select pseudo from UtilisateurGW where idU=:idU;' );
    	$req->execute($tup);
        $tab = $req->fetchAll();
    	return $tab;
	   }catch(PDOException $Exception){
	       return false;
	   }
	}
}

?>
