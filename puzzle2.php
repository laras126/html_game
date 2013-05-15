<?php include('parts/header.php'); ?>

	<div id="puzzle1">
		<h1>Puzzle 2</h1>
		<p>Arrange all of the blue boxes into the white square. <br />
			Arrange all of the pink boxes into the blue boxes<br />. 
			<br />Spot any patterns?</p>
		<span class="button" id="reset">Reset</span>
		<span class="blue-button" id="done">Done!</span>
		
		<div class="puzzle clearfix">
			<!-- <ul class="controls">
				<li><span class="button">Float left</span></li>
				<li><span class="button">Float right</span></li><br />
				<li><span class="blue-button">Position relative</span></li>
				<li><span class="blue-button">Position absolute</span></li>
				<li><span class="blue-button">Position fixed</span></li><br />
				<li><span class="button" id="showSizes">Show Sizes</span></li>
			</ul>-->
			<ul class="sortable clearfix top">

				<li class="half-horiz half-vert">
					<ul class="sortable clearfix second">
						<li class="half-horiz half-vert"></li>
						<li class="whole-vert fourth-horiz"></li>
						<li class="whole-vert fourth-horiz"></li>
						<li class="half-horiz half-vert"></li>
					</ul> <!-- .second -->
				</li>
				
				<li class="whole-horiz half-vert">

					<ul class="sortable clearfix second">
						<li class="eighth-horiz half-vert"></li>
						<li class="half-horiz half-vert"></li>
						<li class="eighth-horiz whole-vert"></li>
						<li class="fourth-horiz whole-vert"></li>
						<li class="half-horiz half-vert"></li>
						<li class="eighth-horiz half-vert"></li>
					</ul> <!-- .second -->

				</li>
				

				<li class="half-horiz half-vert">
					<ul class="sortable clearfix second">
						<li class="whole-horiz half-vert"></li>
						<li class="half-horiz half-vert"></li>
						<li class="half-horiz half-vert"></li>
					</ul> <!-- .second -->
				</li>
				
			</ul> <!-- top -->
		
		</div> <!-- puzzle -->

		<div class="kudos">
			<p class="h1">Excellent work!</p>
			<p>You champion, you.</p>
			<a href="puzzle3.php" class="blue-button">Proceed to the next puzzle &rarr;</a>
		</div>

	</div> <!-- puzzle2 -->

	<!-- <pre class="source"></pre> -->

<?php include('parts/footer.php'); ?>


<!-- <ul class="sortable clearfix third">
								<li class="half-horiz half-vert">
									<ul class="sortable clearfix fourth">
										<li class="half-horiz whole-vert"></li>
										<li class="half-horiz whole-vert"></li>
									</ul>
								</li>
								<li class="half-horiz whole-vert"></li>
							</ul> --> <!-- .third -->