<?php 
	include("top.php");
	$this_page = "Home";
?>

	<div class="title">
		<h1 class="title__text">Personal Pokedex</h1>
	</div>

	<div class="pokemon">
		<img class="pokemon__image" src="public/images/" />
	</div>

	<div>
		<p>This is just some filler to see what i'm working with so far</p>
	</div>

	<form action="view.php">
		<div>
			Name: <input method="get" name="name" type="text" />
		</div>
	</form>

<?php
	include("bottom.php")
?>