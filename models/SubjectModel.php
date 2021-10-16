<?php
class Subject{
	private $id;
	private $name;
	private $duration;
	private $description;
	private $coefficient;

	/**
	 * @param string $name
	 * @param int $duration
	 * @param string $description
	 * @param int $coefficient
	 */
	public function __construct($id='', $name='', $duration='', $description='', $coefficient='')
	{
		$this->id = $id;
		$this->name = $name;
		$this->duration = $duration;
		$this->description = $description;
		$this->coefficient = $coefficient;
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

	public function getListSubject($dbc){
		$sqlQuery = 'SELECT * FROM subject ORDER BY name';
		$response = $dbc->query($sqlQuery);
		$subjects = $response->fetchAll(PDO::FETCH_ASSOC);
		return $subjects;
	}

	public function getSubject($dbc, $id){
		//methode sans requete préparée
		/*$sqlQuery = 'SELECT * FROM subject WHERE id = "'.$id.'"';
		$response = $dbc->query($sqlQuery);
		$subject = $response->fetch(PDO::FETCH_ASSOC);
		return $subject;*/

		//avec une requete préparée
		$query = 'SELECT * FROM subject WHERE id = :id';
		$sth = $dbc->prepare($query);
		$sth->bindParam(':id', $id);
		$sth->execute();
		$subject = $sth->fetch();
		return $subject;
	}

	public function modifySubject($dbc, $id, $name, $description, $duration, $coefficient){
		$sqlQuery = 'UPDATE subject SET name = :name, description = :description, duration = :duration, coefficient = :coefficient WHERE id = :id';

		$sth = $dbc->prepare($sqlQuery);

		$sth->bindParam(':id', $id);
		$sth->bindParam(':name', $name);
		$sth->bindParam(':description', $description);
		$sth->bindParam(':duration', $duration);
		$sth->bindParam(':coefficient', $coefficient);

		$sth->execute();
	}

	public function deleteSubject($dbc, $id){
		$sqlQuery = "DELETE FROM subject WHERE subject.id = $id";
		$dbc->query($sqlQuery);
	}

	public function addToList(&$tabSubjects) {
		array_push($tabSubjects, $this);

	}
}
