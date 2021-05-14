<?php
    /*Récupère max 3 articles de plus (toujours en fonction de la date)*/
    function fonction(){
        include_once('connexionBD.php');
            $truc = htmlspecialchars($_GET['indice']);
            if(str_word_count(htmlspecialchars($_GET['categ']))>1){
                $request="select idA, idU, titreA, imageAvantA, dateA, contenuA, categorieA from ArticleGW ORDER BY idA DESC LIMIT $truc,3";
            }
            else{
              $request='select idA, idU, titreA, imageAvantA, dateA, contenuA, categorieA from ArticleGW where categorieA="'.htmlspecialchars($_GET['categ']).'" ORDER BY idA DESC LIMIT '.$truc.',3';
            }
            $prepareRequest=$bdd->prepare($request);
            $prepareRequest->execute();
            return $prepareRequest->fetchAll();
    }
    header('Content-type: application/json');
    echo json_encode(fonction()); 
    
?>

