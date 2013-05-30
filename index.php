<?php include('parts/header.php'); ?>

	<div id="puzzle1">

		<h1>Puzzle 1</h1>
		<p>Arrange all of the blue boxes into the white square.</p>

		<br />
		<span class="blue-button" id="reload">Reset</span>
		<span class="button" id="done">Done!</span>

		<div class="puzzle clearfix">
		
			<ul class="sortable clearfix">
				<li class="fourth-horiz eighth-vert"></li>
				<li class="eighth-horiz fourth-vert"></li>
				<li class="fourth-horiz fourth-vert"></li>
				<li class="eighth-horiz eighth-vert"></li>
				<li class="eighth-horiz eighth-vert"></li>
				<li class="eighth-horiz half-vert"></li>
				<li class="whole-horiz eighth-vert"></li>
				<li class="eighth-horiz fourth-vert"></li>
				<li class="half-horiz fourth-vert"></li>
				<li class="fourth-horiz eighth-vert"></li>
				<li class="fourth-horiz half-vert"></li>
				<li class="half-horiz half-vert"></li>
				<li class="fourth-horiz eighth-vert"></li>
				<li class="eighth-horiz half-vert"></li>
			</ul>

		</div> <!-- .puzzle -->

		<div class="kudos">
			<p class="h1">Fantastic!</p>
			<p>Easy peazy, lemon squeazy.</p>
			<a href="puzzle2.php" class="button">Proceed to the next puzzle &rarr;</a>
		</div>

	</div> <!-- puzzle1 -->

<?php include('parts/footer.php'); ?>