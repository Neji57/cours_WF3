<?php
// Appel de la page header
require_once('inc/header.php');

use Autoloader\Autoloader;
use Form\Form;
use Form\BootstrapForm;

// Requiert la classe AUtoloader
require_once('Autoloader/Autoloader.php');

// Appelle la fonction register de la classe Autoloader
Autoloader::register();

$form = new BootstrapForm($_POST);
?>

<div class="alert bg-warning message"></div>
<form action="ajax/saveAjax.php" method="post">

	<?php
	echo $form->input("marque");
	echo $form->input("modele");
	echo $form->input("annee");
	echo $form->input("couleur");
	echo $form->submit();
	?>

</form>

<?php
// Appel de la page header
require_once('inc/footer.php');