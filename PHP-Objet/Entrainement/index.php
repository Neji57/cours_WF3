<?php

// Autoload
spl_autoload_register(function ($className) {
	$className = str_replace('\\', '/', $className); // remplacer les \ par des / mac OS X uniquement
	if (file_exists($className . '.php')) {
		require_once($className . '.php');
	}
});

$maison = new Maison("Cuir de licorne", "Feuilles de bananier");

$chambre1 = new Piece("Chambre 1", 16, 2.5);
$cuisine = new Piece("Cuisine", 20, 2.5);
// $maison->setMateriauStructure("Briques");
// $maison->setMateriauToit("Le toit est en amiante ! Attention au cancer");
$pieces = [$chambre1, $cuisine];
$maison->setPieces($pieces);

// echo "La structure est en : ";
// echo $maison->getMateriauStructure();
// echo '<hr>';
// echo "Le toit est en : ";
// echo $maison->getMateriauToit();

echo "<pre>";
print_r ($maison->getInfos());
echo "</pre>";