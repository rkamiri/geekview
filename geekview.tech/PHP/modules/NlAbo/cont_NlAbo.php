<?php 
	require_once 'vue_NlAbo.php';
	require_once 'modele_NlAbo.php';	
	class contNlAbo 
	{
		private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new ModeleNlAbo;
			$this->vue=new VueNlAbo;
	 	}

	 	public function insertNlAbo(){
	 		return $this->modele->insertNlAbo();
	 	}
	 	
	 	public function removeNlAbo()
	 	{
	 		return $this->modele->removeNlAbo();
	 	}
	 	
	 	public function afficheOk($var)
	 	{
	 		$this->vue -> afficheOk($var);
	 	}
	 	
	 	public function afficheErreur($var)
	 	{
	 		$this->vue -> afficheErreur($var);
	 	}
	}
?>