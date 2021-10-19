<?php
	require_once('models/Subject.php');
	$oSubjects = new Subject();

	if (!empty($_POST['validate'])):
		var_dump($_POST);
		$oSubjects->addSubject($dbc, $_POST['name'], $_POST['description'], $_POST['duration'], $_POST['coefficient']);
	endif;

	$list = "subjectAdd";
