<?php
	// require_once 'lib/autoload.php';

	// $boris = new \Boris\Boris('myapp> ');
	// $boris->start();

	$database = new SQLite3('test_database.db');
	
	$database->query('INSERT INTO pokemon (name, height) VALUES ("Oddish", 2), ("Pidgey", 15);');

	$pokemon = $database->query('SELECT * FROM pokemon;');
	$data = $pokemon->fetchArray(SQLITE3_ASSOC);
	echo $pokemon->name;
	print_r($data["name"]);
?>