<?php 
	require_once 'vue_statique.php';
	require_once 'modele_statique.php';	
	class contStatique 
	{
		private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new ModeleStatique;
			$this->vue=new VueStatique;
	 	}

	 	public function getViePrivee()
	 	{
	 		$this->vue->getViePrivee();
	 	}
	 	public function getCgu()
	 	{
	 		$this->vue->getCgu();
	 	}
	}
?>