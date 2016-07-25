<?php
	include("top.php");
	include("models/functions.php");
	include("controller.php");
?>
<div class="gallery">
	<?php foreach($all_pokemon as $pokemon) { ?>

		<div class="gallery_pokemon">
			<a href="view.php?name=<?php echo $pokemon[0]; ?>"><img class="gallery__image" src="public/images/<?php echo $pokemon[0]; ?>.png" /></a>
		</div>

	<?php } ?>
</div>

<?php
	include("bottom.php");
?>