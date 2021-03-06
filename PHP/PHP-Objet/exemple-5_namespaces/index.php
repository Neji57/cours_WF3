<?php
session_start();
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
use DataBase\UserManager;
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

$userManager = new UserManager();

if ($_POST)
{
	$user = $userManager->findById(1);
	foreach ($_POST as $key => $value)
	{
		if ($value == "password")
		{
			continue;
		}
		$methode = 'set' . ucfirst($key);
		if (method_exists($user, $methode))
		{
			$user->$methode($value);
		}
	}
	$userManager->save($user);
}
$user = $userManager->findById(1);

//$user = new \Entity\User("Piote", "Azerty", "superemail@gmail.com", "IT");
//$userManager -> save($user);
// echo $user->getPassword();

$myform = new \Form\Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myform->setData($user);
$myform->addItem(new TextItem("username", "Nom d'utilisateur"));
$myform->addItem(new TextItem("email", "Adresse email"));
$myform->addItem(new SelectItem("sexe", "Sexe", array("Homme" => "h", "Femme" => "f", "Autre" => "a")));
$myform->addItem(new SelectItem("pays", "Pays", array("Pologne" => "PL", "France" => "FR", "Allemagne" => "DE", "Italie" => "IT")));
$myform -> addItem(new TextareaItem("presentation", "Présentation"));
echo $myform->createView();

/* $newForm = $myform;
$newForm->setName("nouveau");
echo $newForm->getName();
echo '<hr>';
echo $myform->getName();

$newForm = clone($myform);
$newForm->setName("nouveau");
echo $newForm->getName();
echo '<hr>';
echo $myform->getName();
$newForm->getItem("username")->setValue("Plop");
echo '<hr>';

echo $newForm->getItem("username")->getValue();
echo '<hr>';
echo $myform->getItem("username")->getValue(); */

/* $formStr = serialize($myform);
$newForm = unserialize($formStr);


echo $newForm -> getName();
$newForm -> setName("Nouveau");
echo '<hr>';
echo $newForm -> getName();
echo '<hr>';
echo $myform -> getName();
echo '<hr>';
$_SESSION['form'] = $myform;
 */



require_once('Include/footer.php');