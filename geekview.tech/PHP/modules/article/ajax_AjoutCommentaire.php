<?php
    session_start();
    function fonction(){
        include_once('../../../connexionBD.php');
        $text= htmlspecialchars($_GET['texte']);
        addslashes($text);
        if($text=="")
            return null;
        $tab= array($_SESSION['idusr'],$_SESSION['idA'],$text);
        $req ='insert into Commenter VALUES (?, ?, now(), ?)';
        $prepareRequest=$bdd->prepare($req);
        $prepareRequest->execute($tab);
        $request ='select * from Commenter natural join UtilisateurGW where idU=? and idA=? order by dateC desc limit 1';
        $prepareRequest=$bdd->prepare($request);
        unset($tab[2]);
        $prepareRequest->execute($tab);
        return($prepareRequest->fetchAll());

    }
    header('Content-type: application/json');
    echo json_encode(fonction()); 
    
?>

