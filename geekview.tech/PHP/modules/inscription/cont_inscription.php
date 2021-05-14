<?php 
	require_once 'vue_inscription.php';
	require_once 'modele_inscription.php';	
	class contInscription
	{
		private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new ModeleInscription;
	 	}
	 	//vérification des champs de mdp et appel de la fonction d'insertion
	 	public function register(){
	 	    $tab =array('pseudo'=>$_POST['pseudo'],'email'=>$_POST['email'],'mdp'=>hash("sha256",$_POST['mdp']),'mdp2'=>hash("sha256",$_POST['mdp2']));
	 	    if($_POST['mdp']===$_POST['mdp2']){
	 		    $tab=$this->modele->insertUser($tab);
	 	        $_SESSION['pseudo']=$tab[0];
	 	        $_SESSION['idusr']=htmlspecialchars($tab[1]);
	 	    }
	 	}

	 	public function getaff()
	 	{
	 		$this->vue->getaff();
	 	}
	}
?>