<?php

/**
 *
 */
class DataBase extends PDO{

	/**
	 * @param $DB_HOST
	 * @param $DB_NAME
	 * @param $DB_USER
	 * @param $DB_PASS
	 */
	public function __construct($DB_HOST, $DB_NAME, $DB_USER, $DB_PASS){
			//Equivalent à new PDO
			parent::__construct('mysql:host='.$DB_HOST.';dbname='.$DB_NAME.';charset=utf8', $DB_USER, $DB_PASS);

		}

	/**
	 * @param $sqlQuery
	 * @param array $array
	 * @param int $fetchMode
	 * @param string $className
	 * @return mixed
	 */
	public function select($sqlQuery, $array = array(), $fetchMode = PDO::FETCH_ASSOC, $className = '')
		{
			$statement = $this->prepare($sqlQuery);
			foreach ($array as $key => $value):
				$statement->bindParam('$key', $value);
			endforeach;
			$statement->execute();
			if(!empty($fetchMode) AND $fetchMode==PDO::FETCH_CLASS)
				$statement->setFetchMode(PDO::FETCH_CLASS, $className);
			return $statement->fetch();
		}

	/**
	 * @param $sqlQuery
	 * @param array $array
	 */
	public function modify($sqlQuery, $array = array())
		{
			$statement = $this->prepare($sqlQuery);
			foreach ($array as $key => $value):
				$statement->bindValue('$key', $value);
			endforeach;
			$statement->execute();
		}

	/**
	 * @param $sqlQuery
	 * @param array $array
	 */
	public function delete($sqlQuery, $array = array()){
			$statement = $this->prepare($sqlQuery);
			foreach ($array as $key => $value):
				$statement->bindValue('$key', $value);
			endforeach;
			$statement->execute();
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



