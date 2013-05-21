<?php include('parts/header.php'); ?>

	<div id="selectors1">
		<header>
			<h1>CSS Classes, IDs, and Such</h1>
			<p>Drag the styled items on the left into the box on the right!</p>
			<span class="blue-button" id="reset">Reset</span>
			<span class="button" id="done">Done!</span>
		</header>

		<section class="clearfix">

			<div class="selectors threecol first">
				<ul class="draggable">
					<li class="boyish">.boyish</li>
					<li class="girly">.girly</li>
					<li class="woody">.woody</li>
					<li class="error">.error</li>
					<li class="title-text">.title</li>
					<li class="alert-help">.alert-help</li>
					<li id="threedee">#threedee</li>
				</ul>
			</div>

			<div class="puzzle ninecol last">
				<div class="clearfix droppable">
					<div class="fourcol first">
						<h3>JOKE</h3>
						<p><strong>Q:</strong> Why did the belt get locked up?</p>
						<p><strong>A:</strong> He held up a pair of pants.</p>
					</div>
					<div class="eightcol last">
						<img src="http://25.media.tumblr.com/tumblr_lv0rubEt0D1r4bbpzo1_500.jpg" />
					</div>
				</div>
				<div class="clearfix droppable">
					<h3>	Lyrics to Wild Ones by Flo Rida and Sia</h3>
					<p>Hey I heard you were a wild one<br/>Oooh<br />
					If I took you home<br />
					It'd be a home run<br />
					Show me how you'll do<br />
					<br />
					I want to shut down the club<br />
					With you<br />
					Hey I heard you like the wild ones<br />
					Oooh<br />
				</div>
			</div> <!-- .puzzle -->

			<div class="kudos">
				<p class="h1">Oh, you peach!</p>
				<p>Very nice, very nice.</p>
				<a href="puzzle2.php" class="button">Proceed to the next puzzle &rarr;</a>
			</div> <!-- .kudos -->
		</section>

	</div> <!-- puzzle1 -->

<?php include('parts/footer.php'); ?>