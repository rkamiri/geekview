<?php  
class ModeleNlAbo extends connectToDB{

	function __construct()
	{
		self::initConnexion();
	}

    /*insert le mail dans la BD*/
	public function insertNlAbo()
	{
	   try{
	    $tup=array('email'=>$_POST['email']);
		//$t=array('email'=>$tab['email']);
		$req= self::$bdd->prepare('insert into AbonnementNlGW values (:email);');
		$req->execute($tup);
		return true;
	   }catch(PDOException $Exception){
	       return false;
	   }
	}

    /*Supprime le mail de la BD*/
	public function removeNlAbo()
	{
		$t=array('email'=>$_POST['email']);
		$req= self::$bdd->prepare('DELETE FROM `AbonnementNlGW` WHERE  email= (:email);');
		$req->execute($t);
	}
}

?>
