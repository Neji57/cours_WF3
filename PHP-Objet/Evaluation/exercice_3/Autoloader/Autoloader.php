<?php

namespace Autoloader;

class Autoloader
{

	/**
	 * Appelle une fonction pour le chargement automatique des classes
	 *
	 */
	static function register()
	{
		spl_autoload_register(array(__CLASS__, 'autoload'));
	}


	/**
	 * Si le fichier de classe existe, il est requis dans la page
	 *
	 */
	static function autoload($className)
	{
		// Requis sur OS X
		$className = str_replace('\\', '/', $className);
		if (file_exists($className . '.php')) {
			require_once($className . '.php');
		}
	}
}