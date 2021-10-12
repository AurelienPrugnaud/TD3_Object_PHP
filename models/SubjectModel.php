<?php
class Subjects{
	private $name;
	private $duration;
	private $description;
	private $note;
	const coefficient = 2;

	/**
	 * @param string $name
	 * @param int $duration
	 * @param string $description
	 * @param int | float $note
	 */
	public function __construct($name, $duration, $description, $note)
	{
		$this->name = $name;
		$this->duration = $duration;
		$this->description = $description;
		$this->note = $note;
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
	 * @return float|int
	 */
	public function getNote()
	{
		return $this->note;
	}

	/**
	 * @param float|int $note
	 */
	public function setNote($note): void
	{
		$this->note = $note;
	}

	public function coefficientCalculation($note) {
		$noteCoefficient = $note * self::coefficient;
		return $noteCoefficient;
	}

	public function addToList(&$tabSubjects) {
		array_push($tabSubjects, $this);

	}
}
