<?php 
	require_once 'cont_editArticle.php';	
	class modEditArticle 
	{
		function __construct()
 	    {
     		$ctrl = new contEditArticle();
     		$action = isset($_GET['action']) ? $_GET['action']:null;
     		switch ($action) {
     			case 'editArticle':
     				$ctrl->editor();
     				break;
     			case 'submitArticle':
     				$ctrl->submitArticle();
     				break;
     			default:
                         $ctrl->getaff();
     				break;
     		}
    	}
	}
?>