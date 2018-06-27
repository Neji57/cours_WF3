<?php

class Maison
{
	private $materiauStructure;
	private $materiauToit;
	private $pieces;
	

	public function __construct()
	{

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
	public function setMateriauStructure($materiauStructure)
	{
		$this->materiauStructure = $materiauStructure;

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
	public function setMateriauToit($materiauToit)
	{
		$this->materiauToit = $materiauToit;

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
}