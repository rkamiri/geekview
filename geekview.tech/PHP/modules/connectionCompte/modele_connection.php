<?php  
//include_once '../../connectToDB.php';
class ModeleConnection extends connectToDB{

	function __construct()
	{
		self::initConnexion();
	}

	public function connectUser(){
	    //requete de verification de l'email et du mot de passe
		$tup=array('email'=>$_POST['email'],'mdp'=>hash("sha256", $_POST['mdp']));
		$req =self::$bdd->prepare('select idU,pseudo, mail , mdp from UtilisateurGW where mail=:email and mdp = :mdp;' );
		$req->execute($tup);
        $tab = $req->fetchAll();
		return $tab;
	}

}

?>
