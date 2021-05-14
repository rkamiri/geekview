<?php
    session_start();

	require './controleur.php';
	$strl;
	$arrayMod = array("index", "article", "monCompte", "connexion", "faq", "CGU", "contacter");
	$module = isset($_GET['module'])? $_GET['module'] : "index";
	$mod_ctrl=null;
	ob_start();
	$ctrl = new controleur();
    if($module=='monCompte' && !isset($_SESSION['pseudo'])){
	   $module='connection';
	}
	if(isset($_SESSION['pseudo']) && !isset($_SESSION['droits'])){
	     $_SESSION['droits']=$ctrl->getDroits($_SESSION['pseudo']);
    }
	
	include 'includes/entete.php';

    
	
	switch ($module) {
		case 'index':
		    if(isset($_GET['categorie'])){
		        $ctrl->getAff($_GET['categorie']);
		    }else{
			$ctrl->getaff(NULL);
		    }
			break;
		case 'connection':
			if(!isset($_SESSION['pseudo'])){
				include_once 'PHP/modules/connectionCompte/mod_connection.php';
				$mod_ctrl=new modConnection;
			}
			break; 
		case 'monCompte':
            include_once 'PHP/modules/monCompte/mod_compte.php';
			$mod_ctrl=new modCompte;
			break;
		case 'contact':
			include_once 'PHP/modules/contact/mod_contact.php';
			$mod_ctrl=new modContact;
			break;
		case 'statique':
			include_once 'PHP/modules/statique/mod_statique.php';
			$mod_ctrl=new modStatique;
			break;
		case 'editArticle': 
			include_once 'PHP/modules/articlemaker/mod_editArticle.php';
			if(isset($_SESSION['pseudo']) && $_SESSION['droits']>=2){
			    $mod_ctrl=new modEditArticle;
			}
			else{
                die("ERREUR 403 : ACCES REFUSE !");
			}
			break;
		case 'deco' :
            session_unset();
            echo '<meta http-equiv="refresh" content="1;url=https://geekview.tech/"/>';	
		    break;
		case 'NlAbo' :
		    include_once 'PHP/modules/NlAbo/mod_NlAbo.php';
		    $mod_ctrl = new modNlAbo;
		    break;
		case 'inscription':
		    include_once 'PHP/modules/inscription/mod_inscription.php';
		    $mod_ctrl = new modInscription;
            echo '<meta http-equiv="refresh" content="1;url=https://geekview.tech/">';	
            break;
        case 'article' :
           include_once 'PHP/modules/article/mod_Article.php';
            $mod_ctrl = new modArticle($_GET['article']);
            break;
		default:
			die("ERREUR 403 : ACCES REFUSE !");
			break;
	}
	if(isset($_GET['task'])){
	    include_once 'chat/handler.php';
	    $handler = new handler;
	    $handler.action();
	}
	include 'includes/footer.php';

?>
