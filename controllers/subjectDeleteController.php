<?php
	require_once('models/Connexion.php');
	require_once('models/SubjectModel.php');

	$subject = new Subject();
	echo $tabParamUrl[2];
	if(!empty($tabParamUrl[2])):
		$subject->deleteSubject($dbc, $tabParamUrl[2]);
	endif;
	header('Location: /subjectsList');