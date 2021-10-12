<?php
	require_once("models/SubjectModel.php");

	$tabSubjects = array();

	$subjectAlgorithm = new Subjects('Algorithmique', '20', 'Cours d\'algorithmique', 11);

	$subjectAlgorithm->addToList($tabSubjects);

	$subjectEnglish = new Subjects('Anglais', '30', 'Cours d\'anglais', 18);
	$subjectEnglish->addToList($tabSubjects);

	$subjectAngular = new Subjects('Angular', '120', 'Cours d\'angular', 12);
	$subjectAngular->addToList($tabSubjects);

	$subjectDataBase = new Subjects('BDD', '30', 'Cour sur les BDD', 12);
	$subjectDataBase->addToList($tabSubjects);

	$subjectServerDeployment = new Subjects('Déploiement serveur', '20', 'Cour sur le déploiement serveur', 8);
	$subjectServerDeployment->addToList($tabSubjects);

	$subjectJavascript = new Subjects('Javascript', '60', 'Cour de Javascript', 15);
	$subjectJavascript->addToList($tabSubjects);

	$subjectLinux = new Subjects('Linux', '30', 'Cour sur Linux', 8);
	$subjectLinux->addToList($tabSubjects);

	$subjectMockUp = new Subjects('Maquettage', '21', 'Cour sur le maquettage', 16);
	$subjectMockUp->addToList($tabSubjects);

	$subjectPhp = new Subjects('PHP', '60', 'Cour de PHP', 2);
	$subjectPhp->addToList($tabSubjects);

	$subjectScrum = new Subjects('SCRUM', '30', 'Cour sur SCRUM', 14);
	$subjectScrum->addToList($tabSubjects);

	$subjectStaticWeb = new Subjects('Web Statique', '60', 'Cour de web statique', 16);
	$subjectStaticWeb->addToList($tabSubjects);


	$list = "subjectsList";





