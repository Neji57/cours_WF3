<?php require_once('include/header.php'); ?>

<?php 

require_once('form/form.php'); 

$myForm = new Form ("login", "POST", "", array("class" => "form"));
echo $myForm->createView();





?>

<?php require_once('include/footer.php'); ?>
