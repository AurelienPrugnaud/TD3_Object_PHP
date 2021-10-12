<?php
	//Manière de faire avec un fichier .htaccess
	$tabParamUrl = explode('/', $_SERVER['REQUEST_URI'] );
	//début du tableau à l'index 1.
	if(!empty($tabParamUrl[1])):
		switch($tabParamUrl[1]):
			case 'subjectsList':
				include('controllers/subjectController.php');
				break;
			default:
				include('');
				break;
		endswitch;
	endif;
	include("index.php");