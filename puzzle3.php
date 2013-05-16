<?php include('parts/header.php'); ?>

	<div id="puzzle2">
		<h1>Puzzle 3</h1>
		<p>Arrange all of the blue boxes into the white square, the pink boxes into the blue boxes, and the green boxes into the pink boxes.</p>
		<a class="blue-button" id="back" href="puzzle2.php">&larr;Back</a>
		<span class="blue-button" id="reset">Reset</span>
		<span class="button" id="done">Done!</span>
		
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
						<li class="half-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="half-horiz half-vert">
								</li>
								<li class="whole-horiz half-vert"></li>
								<li class="half-horiz half-vert">
								</li>
							</ul> <!-- .third -->
						</li>
						<li class="whole-vert half-horiz">
							<ul class="sortable clearfix third">
								<li class="whole-horiz fourth-vert"></li>
								<li class="half-horiz half-vert">
								</li>
								<li class="whole-horiz fourth-vert">
								</li>
								<li class="fourth-horiz half-vert">
								</li>
								<li class="fourth-horiz fourth-vert">
								</li>
								<li class="fourth-horiz fourth-vert">
								</li>
								
							</ul> <!-- .third -->
						</li>
						<li class="half-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="half-horiz half-vert">
								</li>
								<li class="half-horiz whole-vert"></li>
								<li class="fourth-horiz half-vert">
								</li>
								<li class="fourth-horiz half-vert">
								</li>
							</ul> <!-- .third -->
						</li>
					</ul> <!-- .second -->
				</li>
				
				<li class="whole-horiz half-vert">

					<ul class="sortable clearfix second">
						<li class="fourth-horiz whole-vert">
							<ul class="sortable clearfix third">
								<li class="half-horiz half-vert">
								</li>
								<li class="whole-horiz half-vert"></li>
								<li class="half-horiz half-vert">
								</li>
							</ul> <!-- .third -->
						</li>
						

						<li class="fourth-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="half-horiz half-vert">
								</li>
								<li class="whole-horiz half-vert"></li>
								<li class="half-horiz half-vert">
								</li>
							</ul> <!-- .third -->
						</li>
						

						<li class="fourth-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="fourth-horiz half-vert"></li>
								<li class="fourth-horiz half-vert"></li>
								<li class="whole-horiz half-vert"></li>
								<li class="half-horiz half-vert"></li>
							</ul> <!-- .third -->
						</li>

						<li class="half-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="half-horiz half-vert">
								</li>
								<li class="whole-horiz half-vert"></li>
								<li class="half-horiz half-vert">
								</li>
							</ul> <!-- .third -->
						</li>
					
						<li class="half-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="half-horiz fourth-vert">
								</li>
								<li class="half-horiz half-vert"></li>
								<li class="fourth-horiz fourth-vert"></li>
								<li class="eighth-horiz fourth-vert"></li>

								<li class="fourth-horiz half-vert"></li>
								<li class="fourth-horiz half-vert"></li>

								<li class="eighth-horiz fourth-vert"></li>
								<li class="whole-horiz fourth-vert"></li>
								
							</ul> <!-- .third -->
						</li>
					</ul> <!-- .second -->

				</li>
				

				<li class="half-horiz half-vert">
					<ul class="sortable clearfix second">
						<li class="whole-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="fourth-horiz half-vert">
								</li>
								<li class="half-horiz whole-vert">
								</li>
								<li class="fourth-horiz half-vert">
								</li>
								<li class="fourth-horiz whole-vert">
								</li>
							</ul> <!-- .third -->
						</li>

						<li class="half-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="half-horiz half-vert">
								</li>
								<li class="whole-horiz half-vert">
								</li>
								<li class="half-horiz half-vert">
								</li>
							</ul> <!-- .third -->
						</li>

						<li class="half-horiz half-vert">
							<ul class="sortable clearfix third">
								<li class="whole-horiz whole-vert">
								</li>
							</ul> <!-- .third -->
						</li>
					</ul> <!-- .second -->
				</li>

			</ul> <!-- top -->
		
		</div> <!-- .puzzle -->

		<div class="kudos">
			<p class="h1">Words of encouragement!</p>
			<p>You deserve a sandwich.</p>
			<p>Write down three patterns you realized as you worked through the puzzles. For quick reference, links: </p>
				<ul>
					<li><a href="index.php">Puzzle 1</a></li>
					<li><a href="puzzle2.php">Puzzle 2</a></li>
					<li><a href="puzzle3.php">Puzzle 3</a></li>
				</ul>
		</div>

	</div>

	<!-- <pre class="source"></pre> -->

<?php include('parts/footer.php'); ?>