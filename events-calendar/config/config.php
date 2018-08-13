<?php require_once(dirname(__file__) . DIRECTORY_SEPARATOR . 'function.php');

class Config {

###################################################################################
# 								Variables
###################################################################################


	
	// Hôte Mysql (ex : localhost)
	public static $dbHost = 'localhost'; // Mysql Host (eg: localhost)
	
	// Login Mysql (ex : root)
	public static $dbUsername = 'root'; // Login Mysql eg root
	
	// Mot de passe Mysql
	public static $dbUserPassword = ''; // Mysql Password
	
	// Nom de la base de données
	public static $dbName = 'groupe70'; // Data Base name


	// Nom de la table events
	public static $tableEvents = 'ec__events'; // Name of table events
	
	// Nom de la table users
	public static $tableUsers = 'ec__users'; // Name of table users
	
	// Mail de l'dministrator (utilisé lors de l'envoie du mot de passe perdu)
	public static $adminMail = 'no-reply@localhost.com'; // Email administrator (used to send retrieve password)
	
	// Pagination
	public static $itemsPerPage = '15';
		
	// Langue par défaut
	public static $defaultLanguage = 'en'; // Default language
	
	// Langues disponibles
	public static $availableLanguages = array('fr' => 'francais', 'en' => 'english'); // Available languages
	
	
	
	// Version. ne pas modifier
	public static $version = '2'; // Don't modify
	
	
	
	
	
###################################################################################
# 								Fin / End
###################################################################################
	
	
	
	
	
}	
	
	

?>
