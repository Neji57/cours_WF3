<?php

require_once('DVD.php');
require_once('livre.php');

$monDVD = new DVD(12.99, 2);

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

$livre = new Livre (9.99, 200, '67554568-17');

echo 'ISBN = ' . $livre->getIsbn();