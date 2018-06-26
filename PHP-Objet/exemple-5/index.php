<?php

require_once('Include/header.php');

/* require_once('Form/Form.php');
require_once('Form/TextItem.php');
require_once('Form/SelectItem.php');
require_once('Entity/User.php'); */


// Ne plus utiliser les require_once
spl_autoload_register( function($className)
{
	$className = str_replace('\\', '/', $className); // remplacer les \ par des /
	if(file_exists($className.'.php'))
	{
		require_once($className.'.php');
	}

	//echo "Classe appelée: ".$className."<br>";
});

use Entity\User;
/* use Form\Form;
use Form\TextItem;
use Form\SelectItem; */

use Form\
{
	Form,
	TextItem,
	SelectItem,
	TextareaItem
};

$user = new \Entity\User("Piote", "Azerty", "superemail@gmail.com", "IT");
// echo $user->getPassword();

$myform = new \Form\Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myform->setData($user);
$myform->addItem(new TextItem("username", "Nom d'utilisateur"));
$myform->addItem(new TextItem("email", "Adresse email"));
$myform->addItem(new TextItem("rien", "Rien"));
$myform->addItem(new SelectItem("sexe", "Sexe", array("Homme" => "h", "Femme" => "f", "Autre" => "a")));
$myform->addItem(new SelectItem("pays", "Pays", array("Pologne" => "PL", "France" => "FR", "Allemagne" => "DE", "Italie" => "IT")));
$myform -> addItem(new TextareaItem("presentation", "Présentation"));
echo $myform->createView();

$newForm = $myform;
$newForm->setName("nouveau");
echo $newForm->getName();
echo '</br>';
echo $myform->getName();

$newForm = clone($myform);
$newForm->setName("nouveau");
echo $newForm->getName();
echo '</br>';
echo $myform->getName();
$newForm->getItem("username")->setValue("Plop");
echo '</br>';
echo $newForm->getItem("username")->getValue();
echo '</br>';
echo $myform->getItem("username")->getValue();


require_once('Include/footer.php');