<?php
    session_start();
    function fonction(){
        include_once('../../../connexionBD.php');
        $text= htmlspecialchars($_GET['indice']);
        //$tab=array($_SESSION['idA'],$text);
        $request ='select idA, idU, dateC, texte, pseudo from Commenter natural join UtilisateurGW where idA='.$_SESSION['idA'].' ORDER BY dateC desc limit '.$text.', 5';
        $prepareRequest=$bdd->prepare($request);
        $prepareRequest->execute();
        return($prepareRequest->fetchAll());

    }
    header('Content-type: application/json');
    echo json_encode(fonction()); 
    
?>