<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="css/base.css">
    

		<?php 
		
		
	  if($module=="index"){
        echo'<title>GeekView - Index </title>';
        echo'<style>';include 'css/index.css';echo'</style>';
      }
      if($module=="editArticle"){
        echo'<title>GeekView - Editeur d\'articles </title>';
        echo'<style>';include 'css/editeur.css';echo'</style>';
      }
      if($module=="monCompte"){
        echo'<title>GeekView - Mon Compte</title>';
        echo'<style>';include 'css/details.css';echo'</style>'; 
      }
      if($module=="article"){
          echo'<title>GeekView</title>';
          echo'<style>';include 'css/article.css';echo'</style>';
      }
      
      if($module=="connection" || $module=="NlAbo"){
                echo'<title>GeekView - Connexion</title>';
          echo'<style>';include 'css/connexion.css';echo'</style>';
      }
      if($module=="NlAbo"){
                echo'<title>GeekView - NewsLetter</title>';

      }
      if($module=="contact"){
                echo'<title>GeekView - Contact</title>';
          echo'<style>';include 'css/contact.css';echo'</style>';
      }
      if($module=="statique"){
          if($action="cgu"){
                    echo'<title>GeekView - Connexion</title>';
          }
          else{
                   echo'<title>GeekView - Charte de la vie privée</title>';
          }
         echo'<style>'; include 'css/details.css';echo'</style>';
      }
      

    ?>
    </style>
    </head>
    <header>
        <ul class="nav justify-content-lg-end  mb-3">
            <li class="nav-item">
            	<a class="nav-link " href="https://facebook.com/"><img alt="facebook" class="navlgo" id="fb" src="theme/images/fb.png"></a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" href="https://www.instagram.com/"><img alt="instagram" class="navlgo" src="theme/images/insta.png"></a>
            </li>
            <li class="nav-item">
            	<a class="nav-link" href="https://twitter.com/"><img alt="twitter" class="navlgo" src="theme/images/twitter.png"></a>
            </li>
      		<?php 
                /*$var=ob_get_clean();*/
      			if(!isset($_SESSION['pseudo'])){
      			    echo '<li class="nav-item"><a id="connexionlink" class="nav-link" href="?module=connection">Connexion/Inscription</a></li>';
      			    
      			}    	
      			else{
      			    if($_SESSION['droits']>=2){
      			        echo '<li class="nav-item"><a id="connexionlink" class="nav-link" href="?module=editArticle&action=editArticle">Écrire un article</a></li>';
      			    }
      			    echo '<li class="nav-item"><a class="nav-link" href="?module=monCompte">'.$_SESSION['pseudo'].'</a></li>'.'<li class="nav-item"><a id="connexionlink" class="nav-link" href="?module=deco">Deconnexion</a><li>';
        		   }
        		    //ob_start();
      			
      		?>
  	    </ul>
    	<a href="/"><img src="theme/images/logo.png" id="logo" class="img-fluid" alt="Responsive image"></a>
        <nav class="navbar navbar-light navbar-expand-md bg-faded justify-content-left">
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsingNavbar"><span class="navbar-toggler-icon"></span></button>
          <div class="navbar-collapse collapse w-100" id="collapsingNavbar">
            <ul class="navbar-nav w-100 justify-content-center">
              <li class="nav-item "><a class="nav-link" id="green" href="?categorie=technologies">TECHNOLOGIES</a></li>
              <li class="nav-item"><a class="nav-link" id="darkblue" href="?categorie=jeux">JEUX VIDÉOS</a></li>
              <li class="nav-item"><a class="nav-link" id="lightblue" href="?categorie=films">FILMS</a></li>
              <li class="nav-item "><a class="nav-link" id="yellow" href="?categorie=series">SÉRIES</a></li>
              <li class="nav-item"><a class="nav-link" id="orange" href="?categorie=comics">COMICS</a></li>
              <li class="nav-item"><a class="nav-link" id="red" href="?categorie=mangas">MANGAS</a></li>
              <li class="nav-item"><a class="nav-link" id="violet" href="?categorie=animes">ANIMES</a></li>
              <li class="nav-item "><a class="nav-link" id="pink" href="?categorie=news">NEWS</a></li>
              <li class="nav-item"><a class="nav-link" id="black" href="?categorie=comparatifs">COMPARATIFS</a></li>
            </ul>
          </div>
        </nav>
    </header>
</html>