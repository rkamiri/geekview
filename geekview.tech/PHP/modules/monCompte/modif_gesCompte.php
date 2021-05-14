<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=u434989051_dazy;charset=utf8', 'u434989051_dazy', 'tactac', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
    
    $test = $_SESSION['idusr'];
    $tabulation = array("id"=>$_SESSION['idusr'],"pseudo"=>$_POST['pseudo'],"bio"=>$_POST['bio'],"mail"=>$_POST['mail'],"curpwd"=>hash("sha256",$_POST['curpwd']),"newpwd"=>hash("sha256",$_POST['newpwd']));
    $verif=$bdd->prepare("select * from UtilisateurGW where idU=? and mdp = ?");
    $verif->execute(array($_SESSION['idusr'],hash("sha256",$_POST['curpwd'])));
    if(count($verif->fetchAll())==1){
        unset($tabulation['newpwd']);
        unset($tabulation['curpwd']);
        foreach($tabulation as &$val){
            $val=htmlspecialchars($val);
        }
        
        if(empty($_POST['newpwd'])){
            $req=$bdd->prepare("update UtilisateurGW set pseudo = :pseudo, bio = :bio, mail = :mail where idU = :id");
            $req->execute($tabulation);
        }else{
            $req=$bdd->prepare("update UtilisateurGW set pseudo = :pseudo, bio = :bio, mail = :mail where idU=:id");
            $req->execute($tabulation);
        }
        
        $_SESSION['pseudo']=$tabulation['pseudo'];
    }
?>