<?php
	$oSubjects = new Subject();

	if (!empty($_POST['validate'])):
		$oSubjects->addSubject($dbc, $_POST['name'], $_POST['description'], $_POST['duration'], $_POST['coefficient']);
	endif;

	$list = "subjectAdd";
