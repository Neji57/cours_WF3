<?php

/* require_once('Vehicule.php');
require_once('Voiture.php');
require_once('Moto.php');
 */

// Ne plus utiliser les require_once
spl_autoload_register( function($className)
{
	$className = str_replace('\\', '/', $className); // remplacer les \ par des /
	if(file_exists($className.'.php'))
	{
		require_once($className.'.php');
	}
});

$vehicule = new Vehicule("#990000");
// $vehicule->setCouleur();
echo $vehicule -> toString();
echo '<hr>';

$voiture = new Voiture("#890000");
$moto = new Moto("#FF5566");


echo $voiture -> toString();
echo '<hr>';

$voiture -> setNombrePortes(4);
Voiture::klaxonner();
echo '<hr>';


echo $moto -> tostring();
echo '<hr>';

echo Vehicule::$counter . ' Véhicules';
echo '<hr>';
