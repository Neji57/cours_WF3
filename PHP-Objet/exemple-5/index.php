<?php 
require_once('include/header.php'); 
require_once('form/form.php');
require_once('form/textItem.php');
 
$myForm = new Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
$myForm->addItem(new TextItem("username"));
echo $myForm->createView();





require_once('include/footer.php'); ?>
