<?php 
	require_once 'vue_editArticle.php';
	require_once 'modele_editArticle.php';	
	class contEditArticle
	{
		private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new modeleEditArticle;
			$this->vue=new vueEditArticle;
	 	}

	 	public function editor(){
	 		$this->vue->editor();
	 	}
	 	public function submitArticle(){
	 		$this->modele->submitArticle();
	 	}
	 	public function deconnect(){
	 		$this->modele->deconnect();
	 	}

	 	public function getaff()
	 	{
	 		$this->vue->getaff();
	 	}
	}
?>