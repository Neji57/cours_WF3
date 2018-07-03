<?php

define('BASEPATH', "cours_wf3/PHP-Symphony/MVCExemple-master");

require_once __DIR__ . "/vendor/autoload.php";
spl_autoload_register(function($className){
    $className = str_replace('\\', '/', $className); // remplacer les \ par des / mac OS X uniquement
    $className = 'src/' . $className .'.php';
    if (file_exists($className)) {
        require_once($className);
    }
});
// Init twig
$loader = new Twig_Loader_Filesystem(__DIR__ . '/src/View');
$twig = new Twig_Environment($loader, array('debug' => true));
$twig->addGlobal('path', BASEPATH);

use Controller\FrontController;

$frontController = new FrontController();
$frontController->setBasePath(BASEPATH);

$templateInfos =  $frontController->run();

$template = $twig->load($templateInfos['template']);
echo $template->render($templateInfos['data']);