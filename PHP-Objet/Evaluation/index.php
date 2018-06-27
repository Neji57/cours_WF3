<?php
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