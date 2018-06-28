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



var_dump($cat1->getInfosBeautiful());
var_dump($cat2->getInfosBeautiful());
var_dump($cat3->getInfosBeautiful());

var_dump($cat1->getInfos());
var_dump($cat2->getInfos());
var_dump($cat3->getInfos());


// Appel de la page header
require_once('inc/footer.php');