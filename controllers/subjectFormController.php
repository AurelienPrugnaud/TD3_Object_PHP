<?php
	require_once('models/Connexion.php');
	require_once('models/SubjectModel.php');

	$subjects = new Subject();

	if(!empty($_POST) AND !empty($_POST['name'])):
	 	$subject =  $subjects->modifySubject($dbc, $_POST['id'], $_POST['name'], $_POST['description'], $_POST['duration'], $_POST['coefficient']);
		$tabParamUrl[2] = $_POST['id'];
		header('Location: /subjectsList/');
	endif;

	if(!empty($tabParamUrl[2])):
		$subject = $subjects->getSubject($dbc, $tabParamUrl[2]);
	endif;

	$list = "subjectModify";
