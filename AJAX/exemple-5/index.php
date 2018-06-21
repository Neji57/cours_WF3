<?php 
session_start();
require_once('src/utils.php');
$pdo = dbConnect();

$template = "login";
$registrationError = "";
$loginError = '';


// inscription 
if(isset($_POST['register'])) {
    $result = register($pdo, $_POST, $_FILES);
    if(!$result['success']) {
        $registrationError = $result['message'];
    }
}
elseif (isset($_POST['login'])) // Connexion
{
    $result = login($pdo, $_POST);
    if(!$result['success'])
    {
        $loginError = $result['message'];
    }
}

//var_dump($_SESSION['user_id']);

$user = getUser();
if($user)
{
    // page messenger
    $template = "messenger";
}

require_once('view/header.php'); 
require_once('view/' . $template . '.php'); 
require_once('view/footer.php'); 
?>
