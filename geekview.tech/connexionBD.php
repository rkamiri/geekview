<?php
	$dns="mysql:host=localhost;dbname=u434989051_dazy;";
	$login="u434989051_dazy";
	$mdp="tactac";
	$options = array( PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8' );
	try{
			$bdd = new PDO($dns,$login,$mdp,$options);
	}catch(PDOException $pdoe){
		echo 'Erreur de Connexion a la BD '.$pdoe;
	}

?>
