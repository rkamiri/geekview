<?php  
class ModeleCompte extends connectToDB{

	function __construct()
	{
		self::initConnexion();
	}
	//recuperation de toutes les infos du compte
	function getAllInfo()
	{
	    $req=self::$bdd->prepare('select * from UtilisateurGW where idU=:id;');
	    $req->execute(array("id"=>$_SESSION['idusr']));
	    $req=$req->fetchAll();
	    return $req;
	}
}

?>
