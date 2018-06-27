<?php

class Maison
{
	private $materiauStructure;
	private $materiauToit;
	private $pieces;
	private const MATERIAU_STRUCTURE = [
		"Briques",
		"Parepaing",
		"Bois",
		"Cuir de licorne"
	];
	private const MATERIAU_TOIT = [
		"Tuiles",
		"Amiante",
		"Feuilles de bananier"
	];


	public function __construct(string $materiauStructure, string $materiauToit)
	{
		$this -> setMateriauStructure($materiauStructure);
		$this -> setMateriauToit($materiauToit);
	}


	/**
	 * Get the value of materiauStructure
	 */
	public function getMateriauStructure()
	{
		return $this->materiauStructure;
	}

	/**
	 * Set the value of materiauStructure
	 *
	 * @return  self
	 */
	public function setMateriauStructure(string $materiauStructure)
	{
		if(in_array($materiauStructure, self::MATERIAU_STRUCTURE))
		{
			$this->materiauStructure = $materiauStructure;
		} else {
			trigger_error("Le matériau n'est pas valide");
		}

		return $this;
	}

	/**
	 * Get the value of materiauToit
	 */
	public function getMateriauToit()
	{
		return $this->materiauToit;
	}

	/**
	 * Set the value of materiauToit
	 *
	 * @return  self
	 */
	public function setMateriauToit(string $materiauToit)
	{
		if(in_array($materiauToit, self::MATERIAU_TOIT))
		{
			$this->materiauToit = $materiauToit;
		} else {
			trigger_error("Le matériau n'est pas valide");
		}

		return $this;
	}

	public function addPiece()
	{

	}

	/**
	 * Get the value of pieces
	 */
	public function getPieces()
	{
		return $this->pieces;
	}

	/**
	 * Set the value of pieces
	 *
	 * @return  self
	 */
	public function setPieces(array $pieces)
	{
		$this->pieces = $pieces;

		return $this;
	}

	public function getInfos()
	{
		$pieces = array();
		foreach ($this->getPieces() as $key => $value) {
			$pieces[] = array(
				"nom" => $value->getNom(),
				"surface" => $value->getSurface(),
				"hauteur" => $value->getHauteur(),
				"nbFenetres" => $value->getNbFenetres(),
			);
		}

		$infos = array(
			"matStructure" => $this->getMateriauStructure(),
			"matToit" => $this->getMateriauToit(),
			"pieces" => $pieces,
		);

		return $infos;
	}
}