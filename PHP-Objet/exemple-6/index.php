<?php

require_once('Vehicule.php');

$vehicule = new Vehicule("#990000");
// $vehicule->setCouleur("#990000");

echo $vehicule->toString();