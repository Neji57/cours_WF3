<?php

class Article // Création de la classe
// Rassembler des fonctions et des attributs pour faire un comportement
{
	// Propriétés
	private $titre = "Mon article"; // Création de la variable $titre dans la classe Article et on ajoute une chaîne dans $titre
	private $statut;
	public static $counter = 0;

	// Déclaration de constantes
	const S_PUBLIC = 1;
	const S_PRIVATE = 0;

	// Constructeur
	public function __construct($titre)
	{
		// Valeurs par défaut
		$this->setTitre($titre);
		$this->statut = self::S_PUBLIC;
		self::$counter++;
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

	public function isPublic()
	{
		return $this->statut == self::S_PUBLIC;
	}

	public static function getCounter()
	{
		return self::$counter;
	}
}

echo Article::$counter . ' ' .  'article(s) </br>';
//echo Article::S_PUBLIC;

$monArticle = new Article("Article 1"); // création d'un objet
echo Article::$counter . ' ' . 'article(s) </br>';

$article2 = new Article("Article 2"); // Création d'un nouvel objet
// La variable $titre de L'objet $article2 est indépendante de $monArticle

echo Article::$counter . ' ' . 'article(s) </br>';

echo $monArticle->getCounter();


/* echo $monArticle->getTitre();
$monArticle->setTitre("Nouvel article");
echo '</br>';
echo $monArticle->getTitre();
echo '</br>';
echo $article2->getTitre(); */

