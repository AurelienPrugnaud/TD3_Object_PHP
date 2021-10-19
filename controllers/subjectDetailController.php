<?php
	if (!empty($tabParamUrl[2])):
		$subjects = Subject::getSubject($dbc, $tabParamUrl[2]);
	endif;

	$list = "subjectDetail";

