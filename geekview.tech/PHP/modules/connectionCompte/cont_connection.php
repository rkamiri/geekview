<?php 
	require_once 'vue_connection.php';
	require_once 'modele_connection.php';	
	class contConnection
	{
		private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new ModeleConnection;
			$this->vue=new VueConnection;
	 	}

	 	public function connection(){
	 		$tab=$this->modele->connectUser();
	 		$_SESSION['pseudo'] = count($tab[0])>1 ? $tab[0]['pseudo'] : null;
	 		$_SESSION['idusr'] = count($tab[0])>1 ? $tab[0]['idU'] : null;
	 		unset($_GET['action']);
	 		return true;
	 		
	 	}

	 	public function getaff()
	 	{
	 		$this->vue->getaff();
	 	}
	}
?>