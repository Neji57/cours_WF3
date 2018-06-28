<?php
// Appel de la page header
require_once('inc/header.php');

use Autoloader\Autoloader;
use Form\Form;

// Requiert la classe AUtoloader
require_once('Autoloader/Autoloader.php');

// Appelle la fonction register de la classe Autoloader
Autoloader::register();

$form = new Form($_POST);

echo $form->input("username");
echo $form->input("password");
echo $form->submit();

$multi = [[2 => 'deux', '3', 'quatre'], [5, 6, 7], ['x', 'y', 'z']];
echo $multi [0][3] + $multi[1][2] . $multi[2][1+1];


// Appel de la page header
require_once('inc/footer.php');