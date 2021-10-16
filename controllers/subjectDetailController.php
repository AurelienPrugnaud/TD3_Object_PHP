<?php
	require_once('models/Connexion.php');
	require_once('models/SubjectModel.php');

	$subjects = new Subject();
	if (!empty($tabParamUrl[2])):
		$subject = $subjects->getSubject($dbc, $tabParamUrl[2]);
	endif;

	$list = "subjectDetail";

