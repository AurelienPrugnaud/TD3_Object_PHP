<?php
	class DataBase extends PDO{

		public function __construct($DB_HOST, $DB_NAME, $DB_USER, $DB_PASS){

			parent::__construct('mysql:host='.$DB_HOST.';dbname='.$DB_NAME.';charset=utf8', $DB_USER, $DB_PASS);

		}
	}

/*	//0. Définition des variables de connexion à la BDD
	$servername = 'localhost'; //en local : mettre localhost
	$username = 'zarava';
	$password = '270695CEDwwM';
	$bddname = 'php_pdo';

	//1. Connexion à la base de données
	//1.0 TRY : il essaye de traiter ce code
	try {
		$dbc = new PDO("mysql:host=$servername;dbname=$bddname",$username, $password);

		//s'il y a une erreur on génère une exception
		$dbc->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}
	//1.1 TRY : il essaye de traiter ce code
	catch(PDOException $e){
		//message recu par l'exception
		//echo $e->getMessage();

		//code d'erreur recu par l'exception
		//echo $e->getCode();

		echo "Erreur de connexion à la base de données";
	}*/



