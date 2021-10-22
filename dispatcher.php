<?php
	require_once("models/autoLoad.php");
	require_once("config/development.php");
	//require_once("models/DataBase.php");

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
				case 'subjectAdd':
					include('controllers/subjectAddController.php');
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