<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
	<title>Document</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" integrity="sha384-WskhaSGFgHYWDcbwN70/dfYBj47jz9qbsMId/iRN3ewGhXQFZCSftd1LZCfmhktB" crossorigin="anonymous">
</head>
<body>
	<div class="container">

<?php

// Autoload
spl_autoload_register(function ($className) {
	$className = str_replace('\\', '/', $className); // remplacer les \ par des / mac OS X uniquement
	if (file_exists($className . '.php')) {
		require_once($className . '.php');
	}
});
?>

<input type="text" class="form-control" name="nom" placeholder="Nom de la maison" /><br/>
<input type="text" class="form-control" name="matStruct" value="<?= $infos["matStructure"] ?>" /><br/>
<input type="text" class="form-control" name="matToit" value="<?= $infos["matToit"] ?>" /><br/>
<textarea name="pieces" class="form-control" cols="80" rows="20">
<?php
foreach ($infos['pieces'] as $key => $value) {
	echo "PIECES $key
        ";
	echo "Nom: " . $value['nom'] . "
        ";
	echo "Surface: " . $value['surface'] . "
        ";
	echo "Hauteur: " . $value['hauteur'] . "
        ";
	echo "Nombre de fenêtre: " . $value['nbFenetres'] . "
            ";
}
?>
</textarea>

<?php
$maison = new Maison("Cuir de licorne", "Feuilles de bananier");

$chambre1 = new Piece("Chambre 1", 16, 2.5);
$cuisine = new Piece("Cuisine", 20, 2.5);
// $maison->setMateriauStructure("Briques");
// $maison->setMateriauToit("Le toit est en amiante ! Attention au cancer");
$pieces = [$chambre1, $cuisine];
$maison->setPieces($pieces);

// echo "La structure est en : ";
// echo $maison->getMateriauStructure();
// echo '<hr>';
// echo "Le toit est en : ";
// echo $maison->getMateriauToit();

echo "<pre>";
print_r ($maison->getInfos());
echo "</pre>";

?>
<script
  src="https://code.jquery.com/jquery-3.3.1.js"
  integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60="
  crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js" integrity="sha384-smHYKdLADwkXOn1EmN1qk/HfnUcbVRZyYmZ4qpPea6sjB/pTJ0euyQp0Mk8ck+5T" crossorigin="anonymous"></script>
	</div>
</body>

</html>