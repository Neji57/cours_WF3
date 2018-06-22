<?php

class Article // Création de la classe
// Rassembler des fonctions et des attributs pour faire un comportement
{
	// Propriétés
	private $titre = "Mon article"; // Création de la variable $titre dans la classe Article et on ajoute une chaîne dans $titre

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




//$article2 = new Article; // Création d'un nouvel objet
//$article2->titre = "Encore un !"; // Ajout d'une chaîne dans la variable $titre
// La variable $titre de L'objet $article2 est indépendante de $monArticle (son contenu n'est pas remplacé)

//echo $article2->titre;

$monArticle = new Article; // création d'un objet
$article2 = new Article;

echo $monArticle->getTitre();
$monArticle->setTitre("Nouvel article");
echo '</br>';
echo $monArticle->getTitre();