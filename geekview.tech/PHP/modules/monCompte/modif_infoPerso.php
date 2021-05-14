<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=u434989051_dazy;charset=utf8', 'u434989051_dazy', 'tactac', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
    
    $tabulation = array("id"=>$_SESSION['idusr'],"nom"=>$_POST['nom'],"prenom"=>$_POST['prenom'],"date"=>$_POST['datNaiss'],"genre"=>$_POST['genre'],"pays"=>$_POST['pays']);
    switch($tabulation['genre']){
        case 'Homme':
            $tabulation['genre']='h';
            break;
        case 'Femme':
            $tabulation['genre']='f';
            break;
        case 'Autre':
            $tabulation['genre']='nd';
            break;
    }
    foreach($tabulation as &$val){
        $val=htmlspecialchars($val);
    }
    $req=$bdd->prepare("update UtilisateurGW set nom = :nom, prenom = :prenom, dateNaissance = :date, genre=:genre,pays=:pays where idU=:id;");
    
    $req->execute($tabulation);

?>