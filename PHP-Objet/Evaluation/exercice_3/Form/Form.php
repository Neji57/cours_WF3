<?php

namespace Form;

/**
 * class Form
 * Permet de générer un formulaire rapidement et simplement
 */

class Form
{
	/**
	 * @var array Données utilisées par le formulaire
	 */
	protected $data;

	/**
	 * @var string Tag utilisé pour entourer les champs
	 */
	public $surround = 'p';


	/**
	 * @param array $data Données utilisées par le formulaire
	 */
	public function __construct($data = array())
	{
		$this->data = $data;
	}


	/**
	 * Balise qui entoure le code HTML
	 *
	 * @param string $html
	 * @return string
	 */
	protected function surround($html)
	{
		return "<" . $this->surround . ">" . $html . "</" . $this->surround . ">";
	}

	/**
	 * Index de la valeur à récupérer
	 *
	 * @param [type] $index
	 * @return string
	 */
	protected function getValue($index)
	{
		if (isset($this->data[$index])) {

			return $this->data[$index];

		} else {

			return null;

		}
	}

	/**
	 * Génération d'un input de type texte
	 *
	 * @param string $name
	 * @return string
	 */
	public function input($name)
	{
		return $this->surround('<input type="text" name="' . $name . '"value="' . $this->getValue($name) . '"placeholder="' . $name . '">');
	}

	/**
	 * Créer un bouton submit
	 *
	 * @return string
	 */
	public function submit()
	{
		return $this->surround('<button type="submit">Envoyer</button>');
	}
}