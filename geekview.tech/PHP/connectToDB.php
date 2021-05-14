<?php
	class connectToDB{
		protected static $bdd;
		protected static $dns = "mysql:host=localhost;dbname=u434989051_dazy;";
		protected static $user = "u434989051_dazy";
		protected static $password = "tactac";
		public static function initConnexion()
		{
			try{
			    self::$bdd = new PDO(self::$dns,self::$user,self::$password);
			    self::$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			}catch(PDOException $e){
			    echo "Connection failed: " . $e->getMessage();
			}
		}
		
	}
?>