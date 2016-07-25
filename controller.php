<?php
	// include("models/functions.php");

	$name = ucfirst($_GET["name"]);
	$cp = $_GET["cp"];
	$hp = $_GET["hp"];
	$gender = $_GET["gender"];
	$height = $_GET["height"];
	$weight = $_GET["weight"];
	$favorite = $_GET["favorite"];
	$stage1 = $_GET["stage1"];
	$stage2 = $_GET["stage2"];
	$stage3 = $_GET["stage3"];
	$type = $_GET["type"];


	$new_pokemon = array($name, $cp, $hp, $gender, $height, $weight, $favorite, $stage1, $stage2, $stage3, $type);

	$data_file = file("models/pokedex.csv");

	$all_pokemon = all_pokemon($data_file);

	$favorites = favorites($all_pokemon);

	$selected_pokemon = get_pokemon_from_file($name, $all_pokemon);

?>