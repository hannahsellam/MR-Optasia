<?php
	//Connexion au serveur
	try
	{
		$dns = 'mysql:host=localhost;dbname=' . DB_NAME; //Concaténation

		//Options de connexion
		$options = array(
			PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8",
			PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION);

		$pdo = new PDO($dns, DB_USER, DB_PASSWORD, $options);
		//var_dump($pdo); // Il est impossible de faire un echo sur un objet. var_dump sert à afficher le contenu d'une structure de données même si celle ci est complexe.
	}
	catch(Exception $e)
	{
		die("Connexion à MySQL impossible : " . $e->getMessage()); //Le die est un echo enchainé sur un exit, c'est à dire que le programme s'arrête.
	}