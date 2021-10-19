<?php
	//faire un select avec une method
	$tabSubjects = Subject::getListSubject($dbc);

	//faire un select
	//$sqlQuery = "SELECT * FROM subject";
	//$tabSubjects = $dbc->query($sqlQuery);

	//faire un select d'un seul élément
	//$sqlWhereQuery = "SELECT * FROM subject WHERE name = 'Langage SQL'";
	//$results = $dbc->query($sqlWhereQuery);

	//insérer une nouvelle ligne dans la bdd
	//$sqlAddQuery = "INSERT INTO subject (id, name, description, duration, coefficient) VALUES (?,?,?,?,?)";
	//$results = $dbc->prepare($sqlAddQuery);
	//$results->execute([NULL, 'Anglais', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Suspendisse quis placerat nisi, quis malesuada lacus. Aliquam in dolor mauris. Integer vel cursus purus. Quisque tristique molestie magna, lobortis tristique nisl pharetra at. Suspendisse bibendum arcu ac arcu posuere mattis quis sit amet nisi. Morbi non metus sagittis, convallis orci eu, gravida magna. Aliquam eget erat eu ex ultrices sollicitudin at sit amet lectus. Sed tincidunt magna interdum mauris consectetur dictum. Mauris vitae nisl ac lacus mollis tempus et et diam.', 30, 2]);


	$list = "subjectsList";





