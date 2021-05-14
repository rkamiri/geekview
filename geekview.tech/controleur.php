<?php
	require 'vue.php';
	require 'modele.php';
	class controleur{
		private $vue;
		private $mod;

		public function __construct(){
			$this->vue=new Vue();
			$this->mod=new Modele();
		}

		public function getAff($categorie){
			return $this->vue->getBody($this->getMainArticles($categorie), $categorie);
		}
		
		public function getDroits($pseudo){
		    return $this->mod->getDroits($pseudo);
		}
		
		public function getMainArticles($articles){
		    return $this->mod->getMainArticles($articles);
		}
		
		public function getSecondaryArticle($position){
            return $this->mod->getSecondaryArticles($position);
		}
	}
?>