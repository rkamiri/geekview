<?php  
class modeleEditArticle extends connectToDB{

	function __construct()
	{
		self::initConnexion();
	}

	public function submitArticle(){
	    if(isset($_SESSION['pseudo'])){
	        $pseudo = $_SESSION['pseudo'];
	        $requser = self::$bdd->prepare('select idU from UtilisateurGW where pseudo = ? LIMIT 1 ;');
	        $requser->bindParam(1, $pseudo);
	        $requser->execute();
	        $user = $requser->fetchAll();
	        
	        //upload de l'image
	        $upload_dir = "uploads/";
        	$info = pathinfo($_FILES["imageA"]["name"]);
            $upload_file = $upload_dir . basename($_FILES["imageA"]["name"],'.'.$info["extension"]) .'-'.time().'.'.$info["extension"];
            move_uploaded_file($_FILES["imageA"]["tmp_name"], $upload_file);
            
    		$tup=array('idU' => $user[0][0],'titreA'=>$_POST['titreA'],'noteA'=>$_POST['noteA'], 'contenuA' => $_POST['contenuA'], 'imageA' => $upload_file,'categorieA'=>$_POST['categorieA']);
    		$req = self::$bdd->prepare('insert into ArticleGW values(DEFAULT, :idU, :titreA, :imageA, NOW(), :contenuA, :noteA, :categorieA );');
    		$req->execute($tup);
    		echo "L'article a bien été enregistré !";
    	    }
	    else{
	        echo "Vous n'êtes pas connecté :";
	    }
	}

}

?>
