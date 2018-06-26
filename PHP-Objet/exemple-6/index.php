<?php

require_once('Vehicule.php');
require_once('Voiture.php');

$vehicule = new Vehicule("#990000");
// $vehicule->setCouleur();
echo $vehicule -> toString();

$voiture = new Voiture("#890000");
echo '<hr>';
echo $voiture -> toString();
echo '<hr>';
$voiture -> setNombrePortes(4);
Voiture::klaxonner();
