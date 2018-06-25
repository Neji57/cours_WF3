<?php 

require_once('Include/header.php');

require_once('Form/Form.php');
require_once('Form/TextItem.php');
require_once('Entity/User.php');
require_once('form/SelectItem.php');

$user = new User("Loic", "Azerty", "ovigne.loic@gmail.com");

$myform = new Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myform->setData($user);
$myform->addItem(new TextItem("username", "Nom d'utilisateur"));
$myform->addItem(new TextItem("email", "Adresse email"));
$myform->addItem(new SelectItem("sexe", "Sexe", array("Homme" => "h", "Femme" => "f", "Autre" => "a")));
echo $myform->createView();

require_once('Include/footer.php');