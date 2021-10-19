<?php

	if (!empty($_POST['validate'])):
		Subject::addSubject($dbc, $_POST['name'], $_POST['description'], $_POST['duration'], $_POST['coefficient']);
	endif;

	$list = "subjectAdd";
