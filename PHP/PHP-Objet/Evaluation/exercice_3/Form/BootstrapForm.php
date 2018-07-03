<?php

namespace Form;

class BootstrapForm extends Form
{

	/**
	 * Balise qui entoure le code HTML
	 *
	 * @param string $html
	 * @return string
	 */
	protected function surround($html)
	{
		return "<div class='form-group'>" . $html . "</div>";
	}


	/**
	 * Génération d'un input de type texte
	 *
	 * @param string $name
	 * @return string
	 */
	public function input($name)
	{
		return $this->surround(
			'<label>' . $name . '</label><input type="text" name="' . $name . '"value="' . $this->getValue($name) . '"placeholder="' . $name . '" class="form-control">'
		);
	}

	/**
	 * Créer un bouton submit
	 *
	 * @return string
	 */
	public function submit()
	{
		return $this->surround('<button type="submit" class=" form-control btn btn-outline-info">Envoyer</button>');
	}

}