<?php
    require_once 'vue_compte.php';
	require_once 'modele_compte.php';
	class contCompte{
	    private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new ModeleCompte;
			$this->vue=new VueCompte;
			$this->vue->getbody($this->modele->getAllInfo());
	 	}
	 	
	 	
	}