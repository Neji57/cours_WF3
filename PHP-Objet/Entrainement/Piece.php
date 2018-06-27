<?php

class Piece
{
	private $nom;
	private $surface;
	private $hauteur;
	private $nbFenetres;
	public static $counter = 0;

	public function __construct()
	{
		self::$counter++;
	}

	/**
	 * Get the value of surface
	 */
	public function getSurface()
	{
		return $this->surface;
	}

	/**
	 * Set the value of surface
	 *
	 * @return  self
	 */
	public function setSurface($surface)
	{
		if($this -> surface > 0){
			$this->surface = $surface;
		} else {
			trigger_error("La surface doit être supérieure à 0");
		}
		return $this;
	}

	/**
	 * Get the value of hauteur
	 */
	public function getHauteur()
	{
		return $this->hauteur;
	}

	/**
	 * Set the value of hauteur
	 *
	 * @return  self
	 */
	public function setHauteur($hauteur)
	{
		if ($this->hauteur > 0) {
			$this->hauteur = $hauteur;
		} else {
			trigger_error("La hauteur doit être supérieure à 0");
		}
		return $this;
	}

	/**
	 * Get the value of nbFenetres
	 */
	public function getNbFenetres()
	{
		return $this->nbFenetres;
	}

	/**
	 * Set the value of nbFenetres
	 *
	 * @return  self
	 */
	public function setNbFenetres($nbFenetres)
	{
		if ($this->nbFenetres >= 0) {
			$this->nbFenetres = $nbFenetres;
		} else {
			trigger_error("La nb de fenêtres doit être supérieur ou égal à 0");
		}
		return $this;
	}

	/**
	 * Get the value of nom
	 */ 
	public function getNom()
	{
		return $this->nom;
	}

	/**
	 * Set the value of nom
	 *
	 * @return  self
	 */ 
	public function setNom(string $nom)
	{
		$this->nom = $nom;

		return $this;
	}
}