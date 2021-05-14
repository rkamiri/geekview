<?php
session_start();
$bdd = new PDO('mysql:host=localhost;dbname=u434989051_dazy;charset=utf8', 'u434989051_dazy', 'tactac', [
    PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION, 
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
]);
    
    $req='delete from UtilisateurGW where idU=?;';
    $pre=$bdd->prepare($req);
    $pre->execute(array($_SESSION['idusr']));
    
    session_unset();
    echo '<meta http-equiv="refresh" content="1;url=https://geekview.tech"/>';	

?>