<?php

namespace Cats;

class Chat
{

	private $prenom = '';
	private $age = '';
	private $couleur = '';
	private $sexe = '';
	private $race = '';

	const SEXE = ['male', 'femelle'];

	public function __construct($prenom, $age, $couleur, $sexe, $race)
	{
		$this->setPrenom($prenom);
		$this->setAge($age);
		$this->setCouleur($couleur);
		$this->setSexe($sexe);
		$this->setRace($race);
	}

	/**
	 * Get the value of prenom
	 */
	public function getPrenom()
	{
		return $this->prenom;
	}

	/**
	 * Set the value of prenom
	 *
	 * @return  string
	 */
	public function setPrenom(string $prenom)
	{
		if (strlen($prenom) >= 3 && strlen($prenom) <= 20) {
			$this->prenom = $prenom;
		} else {
			trigger_error("Le prénom doit comporter entre 3 et 20 caractères");
		}

		return $this;
	}

	/**
	 * Get the value of age
	 */
	public function getAge()
	{
		return $this->age;
	}

	/**
	 * Set the value of age
	 *
	 * @return  int
	 */
	public function setAge(int $age)
	{
		$this->age = $age;

		return $this;
	}

	/**
	 * Get the value of couleur
	 */
	public function getCouleur()
	{
		return $this->couleur;
	}

	/**
	 * Set the value of couleur
	 *
	 * @return  string
	 */
	public function setCouleur(string $couleur)
	{
		if (strlen($couleur) >= 3 && strlen($couleur) <= 10) {
			$this->couleur = $couleur;
		} else {
			trigger_error("La couleur doit comporter entre 3 et 10 caractères");
		}

		return $this;
	}

	/**
	 * Get the value of sexe
	 */
	public function getSexe()
	{
		return $this->sexe;
	}

	/**
	 * Set the value of sexe
	 *
	 * @return  string
	 */
	public function setSexe(string $sexe)
	{
		if (in_array($sexe, self::SEXE)) {
			$this->sexe = $sexe;
		} else {
			trigger_error("Le sexe doit etre 'male' ou 'femelle'");
		}

		return $this;
	}

	/**
	 * Get the value of race
	 */
	public function getRace()
	{
		return $this->race;
	}

	/**
	 * Set the value of race
	 *
	 * @return  string
	 */
	public function setRace(string $race)
	{
		if (strlen($race) >= 3 && strlen($race) <= 20) {
			$this->race = $race;
		} else {
			trigger_error("La race doit comporter entre 3 et 20 caractères");
		}

		return $this;
	}

	/**
	 * Undocumented function
	 *
	 * @return void
	 */

	public function getInfos()
	{
			echo 'Prénom du chat: ' . $this->getPrenom() . '</br>';
			echo 'Age du chat: ' . $this->getAge() . ' ans</br>';
			echo 'Couleur du chat: ' . $this->getCouleur() . '</br>';
			echo 'Sexe du chat: ' . $this->getSexe() . '</br>';
			echo 'Race du chat: ' . $this->getRace() . '</br>';
			echo '<hr>';
	}

	public function getInfosArray()
	{
		$infos = array(
			$this->getPrenom(),
			$this->getAge(),
			$this->getCouleur(),
			$this->getSexe(),
			$this->getRace(),
		);

		return $infos;
	}
}