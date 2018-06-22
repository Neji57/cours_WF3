<?php

class Article // Création de la classe
// Rassembler des fonctions et des attributs pour faire un comportement
{
	// Propriétés
	private $titre = "Mon article"; // Création de la variable $titre dans la classe Article et on ajoute une chaîne dans $titre

	public function __construct($titre)
	{
		$this->setTitre($titre);
	}

	// Méthodes
	public function getTitre()
	{
		// $this fait référence à mon article (n'existe pas encore ici)
		return $this->titre;
	}

	public function setTitre($nouveauTitre)
	{
		$this->titre = $nouveauTitre;
	}
}

$monArticle = new Article("Article 1"); // création d'un objet
$article2 = new Article("Article 2"); // Création d'un nouvel objet
// La variable $titre de L'objet $article2 est indépendante de $monArticle

echo $monArticle->getTitre();
$monArticle->setTitre("Nouvel article");
echo '</br>';
echo $monArticle->getTitre();
echo '</br>';
echo $article2->getTitre();