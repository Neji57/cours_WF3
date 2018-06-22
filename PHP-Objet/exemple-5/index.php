<?php require_once('include/header.php'); 

require_once('form/form.php'); 

$myForm = new Form ("login", "POST", "", array("class" => "form", "id" => "login-form"));
echo $myForm->createView();



require_once('include/footer.php'); ?>
