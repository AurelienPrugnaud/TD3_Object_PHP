<?php

/**
 *
 */
class Subject{
	/**
	 * @var
	 */
	private $id;
	/**
	 * @var
	 */
	private $name;
	/**
	 * @var
	 */
	private $duration;
	/**
	 * @var
	 */
	private $description;
	/**
	 * @var
	 */
	private $coefficient;

	/**
	 * @param string $name
	 * @param int $duration
	 * @param string $description
	 * @param int $coefficient
	 */
	public function __construct(/*$id='', $name='', $duration='', $description='', $coefficient=''*/)
	{
		/*$this->id = $id;
		$this->name = $name;
		$this->duration = $duration;
		$this->description = $description;
		$this->coefficient = $coefficient;*/
	}

	/**
	 * @return string
	 */
	public function getName(): string
	{
		return $this->name;
	}

	/**
	 * @param string $name
	 */
	public function setName(string $name): void
	{
		$this->name = $name;
	}

	/**
	 * @return int
	 */
	public function getDuration(): int
	{
		return $this->duration;
	}

	/**
	 * @param int $duration
	 */
	public function setDuration(int $duration): void
	{
		$this->duration = $duration;
	}

	/**
	 * @return string
	 */
	public function getDescription(): string
	{
		return $this->description;
	}

	/**
	 * @param string $description
	 */
	public function setDescription(string $description): void
	{
		$this->description = $description;
	}

	/**
	 * @return string
	 */
	public function getCoefficient()
	{
		return $this->coefficient;
	}

	/**
	 * @param int $coefficient
	 */
	public function setCoefficient($coefficient): void
	{
		$this->coefficient = $coefficient;
	}

	/**
	 * @return mixed|string
	 */
	public function getId()
	{
		return $this->id;
	}

	/**
	 * @param mixed|string $id
	 */
	public function setId($id): void
	{
		$this->id = $id;
	}

	/**
	 * @param $dbc
	 * @return mixed
	 */
	 public static function getListSubject($dbc){
		$sqlQuery = 'SELECT * FROM subject ORDER BY name';
		$response = $dbc->query($sqlQuery);
		$subjects = $response->fetchAll(PDO::FETCH_CLASS, __CLASS__);
		return $subjects;
		//$tabSubject = array();

		//foreach($subjects as $subject):
			//Version 1 (best)
			//$sub = new Subject($subject['id'], $subject['name'], $subject['description'], $subject['duration'], $subject['coefficient']);
		//array_push($tabSubject, $sub);

			//version 2 :
			// en reutilisant la methode qui recupere l'objet directement
			// 1. Création d'un objet vide
			// $sub = new Subject();
			// 2. Récupéreration des valeurs pour mettre dans l'objet
			// $sub->getSubject($dbc, $subject['id']);
			// 3. Mettre l'objet dans un tableau
			// array_push($aSubjectCollection, $sub);
		//endforeach;
		//return $tabSubject;

	}

	/**
	 * @param $dbc
	 * @param $id
	 * @return mixed
	 */
	public static function getSubject($dbc, $id){
		//methode sans requete préparée
		/*$sqlQuery = 'SELECT * FROM subject WHERE id = "'.$id.'"';
		$response = $dbc->query($sqlQuery);
		$subject = $response->fetch(PDO::FETCH_ASSOC);
		return $subject;*/

/*		//avec une requete préparée
		$sqlQuery = 'SELECT * FROM subject WHERE id = :id';
		$statement = $dbc->prepare($sqlQuery);
		$statement->bindParam(':id', $id);
		$statement->execute();
		//$subject = $statement->fetch();

		$subject = $statement->fetchObject(__CLASS__);
		return $subject;*/

		//version avec une requete preparée et la méthode select
		$sqlQuery = 'SELECT * FROM subject WHERE id = :id';
		$bindParam = array('id'=>$id);
		$subject =  $dbc->select($sqlQuery,$bindParam, PDO::FETCH_CLASS, __CLASS__);

		return $subject;

		//Version 1 : On assigne à chaque propriété les valeurs recupérées dans le tableau (resultat de la requete)
		/*$this->id = $subject['id'];
		$this->name = $subject['name'];
		$this->description = $subject['description'];
		$this->duration = $subject['duration'];
		$this->coefficient = $subject['coefficient'];*/
	}

	/**
	 * @param $dbc
	 * @param $name
	 * @param $description
	 * @param $duration
	 * @param $coefficient
	 */
/*	public function addSubject($dbc, $name, $description, $duration, $coefficient)
	{
		$sqlQuery = 'INSERT INTO subject(name,description,duration,coefficient)
                    VALUES ( :name, :description, :duration, :coefficient)';
		$statement = $dbc->prepare($sqlQuery);
		$statement->bindParam(':name', $name);
		$statement->bindParam(':description', $description);
		$statement->bindParam(':duration', $duration);
		$statement->bindParam(':coefficient', $coefficient);
		$statement->execute();

	}*/

	/**
	 * @param $dbc
	 * @param $name
	 * @param $description
	 * @param $duration
	 * @param $coefficient
	 * @return mixed
	 */
	public static function addSubject($dbc, $name, $description, $duration, $coefficient)
	{
		$sqlQuery = 'INSERT INTO `subject` SET name = :name, description = :description, duration = :duration, coefficient = :coefficient';
		$bindParam = array('name' => $name, 'description' => $description, 'duration' => $duration, 'coefficient' => $coefficient);
		$subject = $dbc->modifyOrDeleteOrAdd($sqlQuery, $bindParam);
		return $subject;
	}

	/**
	 * @param $dbc
	 * @param $id
	 * @param $name
	 * @param $description
	 * @param $duration
	 * @param $coefficient
	 */
/*	public static function modifySubject($dbc, $id, $name, $description, $duration, $coefficient){
		$sqlQuery = 'UPDATE subject SET name = :name, description = :description, duration = :duration, coefficient = :coefficient WHERE id = :id';

		$statement = $dbc->prepare($sqlQuery);

		$statement->bindParam(':id', $id);
		$statement->bindParam(':name', $name);
		$statement->bindParam(':description', $description);
		$statement->bindParam(':duration', $duration);
		$statement->bindParam(':coefficient', $coefficient);

		$statement->execute();
	}*/

	/**
	 * @param $dbc
	 * @param $id
	 * @param $name
	 * @param $description
	 * @param $duration
	 * @param $coefficient
	 * @return mixed
	 */
	public static function modifySubject($dbc, $id, $name, $description, $duration, $coefficient)
	{
		$sqlQuery = 'UPDATE subject SET name = :name, description = :description, duration = :duration, coefficient = :coefficient WHERE id = :id';
		$bindParam = array('id' => $id, 'name' => $name, 'description' => $description, 'duration' => $duration, 'coefficient' => $coefficient);
		$subject = $dbc->modifyOrDeleteOrAdd($sqlQuery, $bindParam);
		return $subject;
	}

	/**
	 * @param $dbc
	 * @param $id
	 */
/*	public static function  deleteSubject($dbc, $id){
		$sqlQuery = "DELETE FROM subject WHERE subject.id = $id";
		$dbc->query($sqlQuery);
	}*/

	/**
	 * @param $dbc
	 * @param $id
	 */
	public static function deleteSubject($dbc, $id){
		$sqlQuery = "DELETE FROM subject WHERE subject.id = $id";
		$bindParam = array('id' => $id);
		$dbc->modifyOrDeleteOrAdd($sqlQuery, $bindParam);
	}

	/**
	 * @return string
	 */
	public function getDurationByDay() {
		$days = floor($this->duration / 7);

		/*
		Methode 1
		$message = $days.' jour';

		if($days > 1):
			$message .= 's';
		endif;*/


		//methode 2
		if($days <= 1):
			$message = $days.' jour';
		else:
			$message = $days.' jours';
		endif;

		return $message;
	}

	/**
	 * @return string
	 */
	public function getCoefMessage(){

		//<=1 competences transverses
		if($this->coefficient <= 1):
			$message = 'compétence transverse';
		//> 1 et <=2 competences initiales
		elseif($this->coefficient > 1 AND $this->coefficient <= 2):
			$message = 'compétence initiale';
		//> 2 competences indispensables
		else:
			$message = 'compétence indispensable';
		endif;

		return $message;
	}
}
