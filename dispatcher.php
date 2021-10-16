<?php
	$tabParamUrl = explode('/', $_SERVER['REQUEST_URI'] );
	if(!empty($tabParamUrl[1])):
		switch($tabParamUrl[1]):
			case 'subjectsList':
				include('controllers/subjectController.php');
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