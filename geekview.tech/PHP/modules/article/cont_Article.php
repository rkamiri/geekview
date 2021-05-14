<?php 
	require_once 'vue_Article.php';
	require_once 'modele_Article.php';	
	class contArticle
	{
		private $modele; 
		private $vue;	
		function __construct()
		{
			$this->modele=new ModeleArticle;
			$this->vue=new VueArticle;
	 	}


	 	public function afficheArticle($idArticle){
	 	    $article = $this->modele->getArticle($idArticle);
	 	    $auteur = $this->modele->getCreateur($article[0][1])[0][0];
	 	    $commentaires=$this->modele->getCommentaires($idArticle);
	 		$this->vue->afficheArticle($article, $auteur, $commentaires);
	 	}

	}
?>