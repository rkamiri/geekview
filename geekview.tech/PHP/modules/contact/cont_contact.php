<?php 
	require_once 'vue_contact.php';
	require_once 'modele_contact.php';	
	class contContact 
	{
		private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new ModeleContact;
			$this->vue=new VueContact;
	 	}
	 	
	 	public function sendMail(){
	 		return $this->modele->sendMail();
	 	}

	 	public function getAff($success)
	 	{
	 		$this->vue->getAffi($success);
	 	}
	}
?>