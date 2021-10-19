<?php
	//echo $tabParamUrl[2];
	if(!empty($tabParamUrl[2])):
		Subject::deleteSubject($dbc, $tabParamUrl[2]);
	endif;
	//header('Location: /subjectsList');

	$list = "subjectDelete";
