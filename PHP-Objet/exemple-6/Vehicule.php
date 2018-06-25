<?php

class Vehicule
{
	protected $nombreRoues;
	protected $estMotorise;
	protected $nombrePorte;
	protected $couleur;

	public function __construct($couleur)
	{
		$this->setCouleur($couleur);
	}

	public function setCouleur(string $couleur)
	{
		if(strlen($couleur))
		{
			$this->couleur = $couleur;
		}
		else
		{
			trigger_error("La couleur n'est pas valide");
		}
	}

	public function getCouleur()
	{
		return $this->couleur;
	}

	public function toString()
	{
		return "Vehicule couleur " . $this->getCouleur();
	}
}