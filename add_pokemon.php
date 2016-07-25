<?php
	include("top.php");
	include("models/functions.php");
	include("controller.php");
?>
	<div class="header">
		Add New Pok&eacute;mon
	</div>

	<div class="statsContainer">
		<form action="view.php">

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="name" class="form" placeholder="Name (ex. Pikachu)" autofocus required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="gender" class="form" placeholder="Gender" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="cp" class="form" placeholder="Combat Points (CP)" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="hp" class="form" placeholder="Hit Points (HP)" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="weight" class="form" placeholder="Weight (lbs)" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="height" class="form" placeholder="Height (ft)" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="stage1" class="form" placeholder="Stage 1" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="stage2" class="form" placeholder="Stage 2" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="stage3" class="form" placeholder="Stage 3" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					<input type="text" name="type" class="form" placeholder="Type (ex. Water)" required="">
				</div>
			</div>

			<div class="stats">
				<div class="stats__info">
					Favorite? <input type="checkbox" name="favorite">
				</div>
			</div>
				<input type="submit" value="Submit">
			</div>

		</form>
	</div>


<?php
	include("bottom.php");
?>