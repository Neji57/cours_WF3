<?php
// Appel de la page header
require_once('inc/header.php');

use Autoloader\Autoloader;
use Cats\Chat;

// Requiert la classe AUtoloader
require_once('Autoloader/Autoloader.php');

// Appelle la fonction register de la classe Autoloader
Autoloader::register();


$cat1 = new Chat('Kitty', '5', 'Noir', 'femelle', 'Européen');
$cat2 = new Chat('Link', '2', 'Blanc', 'male', 'Siamois');
$cat3 = new Chat('Ice', '8', 'Beige', 'femelle', 'Persan');



var_dump($cat1->getInfosArray());
var_dump($cat2->getInfosArray());
var_dump($cat3->getInfosArray());


// Appel de la page header
require_once('inc/footer.php');