<?php

require_once('Vehicule.php');
require_once('Voiture.php');
require_once('Moto.php');

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