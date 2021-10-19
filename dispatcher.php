<?php
	require_once("models/autoLoad.php");
	//require_once("models/DataBase.php");

	define('DB_HOST','localhost');
	define('DB_USER','zarava');
	define('DB_PASS','270695CEDwwM');
	define('DB_NAME','php_pdo');

	$dbc = new DataBase(DB_HOST,DB_NAME, DB_USER, DB_PASS);

	$tabParamUrl = explode('/', $_SERVER['REQUEST_URI'] );
		if(!empty($tabParamUrl[1])):
			switch($tabParamUrl[1]):
				case 'subjectsList':
					include('controllers/subjectListController.php');
					break;
				case 'subjectDetail':
					include('controllers/subjectDetailController.php');
					break;
				case 'subjectModify':
					include('controllers/subjectFormController.php');
					break;
				case 'subjectDelete':
					include('controllers/subjectDeleteController.php');
					break;
				default:
					include('');
					break;
			endswitch;
		endif;
		include("index.php");