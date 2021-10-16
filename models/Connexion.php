<?php
	//Définition des variables de connexion à la BDD
	$serverName = 'localhost';
	$userName = 'zarava';
	$passWord = '270695CEDwwM';
	$bddName = 'php_pdo';

	//Connexion à la base de données
	//TRY : il essaye de traiter ce code
	try {
		$dbc = new PDO("mysql:host=$serverName;dbname=$bddName;charset=utf8", $userName, $passWord);

		//s'il y a une erreur on génère une exception
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		//echo "Connexion réussie";
	}

	catch (PDOException $e) {
		//message recu par l'exception
		echo $e->getMessage();

		//code d'erreur recu par l'exception
		//echo $e->getCode();

		echo "Erreur de connexion à la base de données";
	}

