<?php

class Article // Création de la classe
{
	public $titre; // Création de la variable $titre dans la classe Article

	public function getTitre()
	{
		return $this->titre;
	}

	public function setTitre()
	{
		echo $titre . '</br>';
		echo $this->titre;
	}
}

//$monArticle = new Article; // création d'un objet
//$monArticle->titre = "Mon super article"; // On ajoute une chaîne dans $titre

//echo $monArticle->titre;

//$article2 = new Article; // Création d'un nouvel objet
//$article2->titre = "Encore un !"; // Ajout d'une chaîne dans la variable $titre
// La variable $titre de L'objet $article2 est indépendante de $monArticle (son contenu n'est pas remplacé)

//echo $article2->titre;

$monArticle = new Article;
$article2 = new Article;

$monArticle = setTitre("Nouvel article");