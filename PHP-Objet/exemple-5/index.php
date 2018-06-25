<?php 

require_once('Include/header.php');

require_once('Form/Form.php');
require_once('Form/TextItem.php');
require_once('Entity/user.php');
require_once('Entity/UselectItem.php');

$user = new User("Loic", "Azerty", "ovigne.loic@gmail.com");

$myform = new Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myform->setData($user);
$myform->addItem(new TextItem("username", "Nom d'utilisateur"));
$myform->addItem(new TextItem("email", "Adresse email"));
$myform->addItem(new TextItem("rien", "rien"));
echo $myform->createView();

require_once('Include/footer.php');