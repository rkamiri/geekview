<?php  
//include_once '../../connectToDB.php';
class ModeleInscription extends connectToDB{

	function __construct()
	{
		self::initConnexion();
	}
    // insertion de l'utilisateur
	public function insertUser($tab)
	{
	    $t=array($tab['email'],$tab['mdp'],$tab['pseudo']);
		$req= self::$bdd->prepare('insert into UtilisateurGW (`idU`, `mail`, `mdp`, `pseudo`) values (default,?,?,?);');
		$req->execute($t);
	    $id=self::$bdd->prepare('select idU from UtilisateurGW where mail=? ');
	    $id->execute(array($tab['email']));
        $t=array($t[2],$id->fetch()[0]);
		return $t;
		
	}

}

?>
