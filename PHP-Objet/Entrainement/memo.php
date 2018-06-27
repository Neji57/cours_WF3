<?php

/*
 Création d'une application de gestion d'énergie d'une maison

 	1 - Modèlisation de la maison

		  Une MAISON contient des PIECES
		  Créer une classe Maison avec les attributs privés suivants:
			  -materiauStructure | type string
			  - materiauToit | type string
			  - Pieces | type array

			La classe Maison contient 1 ou plusieurs objets Piece
			Créer une classe Piece avec les attributs privés suivants:
				- surface | > 0
				- hauteur | > 0
				- nbFenetres | >= 0
			Créer les getter et setter pour valider les données

			Créer un objet Maison qui va contenir plusieurs objets Piece (dans index.php)

			Créer un autoload

			Info : une classe par fichier

	2 - Affiner les classes
	Créer des constructeurs avec les attributs obligatoires:
		Maison : matériauxStructure, matériauToit
		Piece : nom, surface, hauteur

	Dans maison, les matériaux doivent être prédéfinis dans un array de type constante pour valider les données (avec in_array)
 */