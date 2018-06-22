<?php

require_once('DVD.php');

$monDVD = new DVD();
$monDVD->setPrix(12.99);

echo $monDVD->getPrix();
echo '<br>';
echo $monDVD->getPoids();
echo '<br>';


$monDVD->setActeurs(array(
	'Schwarzenegger',
	'Stallone',
	'Emma Watson',
));

foreach ($monDVD->getActeurs() as $key => $acteur) 
{
	echo $acteur . '<br>';
}