<?php
	
	include("top.php");
	include("models/functions.php");
	include("controller.php");

	if($weight != "") {
		save_pokemon($new_pokemon);
	}
	else {
		$name = $_GET["name"];
		$new_pokemon = $selected_pokemon;
	}
?>

	<div>
		<img class="view_image" src="public/images/<?php echo $new_pokemon[0]; ?>.png" />
	</div>

	<div class="statsContainer">

		<div class="stats">
			<div class="stats__title">
				Height:
			</div> 
			<div class="stats__info">
				<?php echo $new_pokemon[4]; ?> ft
			</div>
		</div>

		<div class="stats">
			<div class="stats__title">
				Weight:
			</div>
			<div class="stats__info">
				<?php echo $new_pokemon[5]; ?> lbs
			</div>
		</div>

		<div class="stats">
			<div class="stats__title">
				Gender:
			</div>
			<div class="stats__info">
				<?php echo $new_pokemon[3]; ?>
			</div>
		</div>

		<div class="stats">
			<div class="stats__title">
				Type:
			</div>
			<div class="stats__info">
				<?php echo $new_pokemon[10]; ?>
			</div>
		</div>

		<div class="stats">
			<div class="stats__title">
				CP:
			</div>
			<div class="stats__info">
				<?php echo $new_pokemon[1]; ?>
			</div>
		</div>

		<div class="stats">
			<div class="stats__title">
				HP:
			</div>
			<div class="stats__info">
				<?php echo $new_pokemon[2]; ?>
			</div>
		</div>		

		<div class="stats">
			<div class="stats__title">
				Favorite:
			</div>

		<?php if($new_pokemon[6] == "on") { ?>

			<div class="stats__info">
				<img class="favoriteHeart" src="public/images/heart.png" alt="Heart" />
			</div>

		<?php } else  {?>

			<div class="stats__info">
				No
			</div>
		<?php } ?>
		</div>
	</div>

<?php
	include("bottom.php");
?>