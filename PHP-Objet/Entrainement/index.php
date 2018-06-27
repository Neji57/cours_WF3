<?php

// Autoload
spl_autoload_register(function ($className) {
	$className = str_replace('\\', '/', $className); // remplacer les \ par des / mac OS X uniquement
	if (file_exists($className . '.php')) {
		require_once($className . '.php');
	}
});

$maison = new Maison;
$maison->setMateriauStructure("Briques");
$maison->setMateriauToit("Le toit est en amiante ! Attention au cancer");
echo $maison->getMateriauStructure();
echo '<hr>';
echo $maison->getMateriauToit();