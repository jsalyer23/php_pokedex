<?php

	// This function saves new Pokemon to flat storage file
	//
	// $pokemon = params input from form
	//
	// SAVES DATA TO FILE (AS ARRAY)
	function save_pokemon($pokemon) {
		$pokedex_file = fopen("models/pokedex.csv", "a") or die ("Unable to open file!");
		fputcsv($pokedex_file, $pokemon);
		fclose($pokedex_file);
	}

	// This function gets data for a specific Pokemon from flat storage
	//
	// $name = params
	// $all_pokemon = Array returned from all_pokemon()
	//
	// RETURNS ARRAY
	function get_pokemon_from_file($name, $all_pokemon) {
		foreach($all_pokemon as $pokemon) {
			if($pokemon[0] == $name) {
				return $pokemon;
			}
		}
	}

	// This function adds all Pokemon from data file into an Array
	//
	// $data_file = file("pokedex.csv")
	//
	// RETURNS ARRAY (OF ARRAYS)
	function all_pokemon($data_file) {

		$pokemon_array = array();
		foreach($data_file as $line) {
			$lines = explode(",", $line);
			array_push($pokemon_array, $lines);
		}
		return $pokemon_array;
	}

	function search($all_pokemon) {

	}

	// This function adds all favorited Pokemon into an Array
	//
	// $all_pokemon = Array returned from all_pokemon()
	//
	// RETURNS ARRAY
	function favorites($all_pokemon) {
		$favorites = array();
		foreach($all_pokemon as $pokemon) {
			if($pokemon[6] == "on") {
				array_push($favorites, $pokemon);
			}
		}
		return $favorites;
	}

	function random_favorite($favorites) {
		
	}
	
	$file_contents = file_get_contents("http://pokeapi.co/api/v2/pokemon/squirtle");
	$new_json = json_decode($file_contents, true);
	print_r($new_json["name"]);
	echo "\n\n\n\n";
	print_r($new_json["height"]);
	echo "\n\n\n\n";
	print_r($new_json["weight"]);
	// $data_file = file("pokedex.csv");
	// $all_pokemon = all_pokemon($data_file);
	// print_r($all_pokemon);
	
?>