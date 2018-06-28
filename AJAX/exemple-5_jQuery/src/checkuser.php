
<?php

require_once('utils.php');
$pdo = dbConnect();

// json_encode($array);
// $myJSON = json_decode($string, true);
// $myjSON['value];

header('Content-Type: application/json');
echo json_encode( checkUser($pdo, $_GET), JSON_PRETTY_PRINT );
