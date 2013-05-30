<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Web 101 HTML Puzzle</title>
	<link href="css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>

<body>


	<ul class="pos-puz clearfix">
		<li class="fourth-horiz fourth-vert"></li>
		<li class="fourth-horiz fourth-vert"></li>
		<li class="fourth-horiz fourth-vert"></li>
		<li class="fourth-horiz fourth-vert"></li>
		<li class="fourth-horiz fourth-vert"></li>
		<li class="fourth-horiz fourth-vert"></li>
	</ul> <!-- .pos-puz -->

	<div class="controls">
		<div class="floats clearfix">
			<span class="button" id="floatRight">float:right</span>
			<span class="button" id="floatLeft">float:left</span>
			<span class="button" id="clear">clear</span>
		</div>
		<div class="positions clearfix">
			<span class="blue-button" id="posAbs">absolute</span>
			<span class="blue-button" id="posFix">fixed</span>
			<span class="blue-button selected" id="posRel">relative</span>
			<span class="blue-button" id="posStat">static</span>
		</div>
		<div class="box-model clearfix">
			<span class="button" id="addMargin">margin</span>
			<span class="button" id="addPadding">padding</span>
		</div>
		<div class="box-sizing clearfix">
			<span class="blue-button selected" id="borderBox">border-box</span>
			<span class="blue-button" id="contentBox">content-box</span>
		</div>
		<div class="reset">
			<hr />
			<span><a href="positioning2.php" class="button">Next &rarr;</a></span>
			<span class="button" id="reset">Reset Coordinates</span>

		</div>

	</div>
	
	<!-- <div class="kudos">
		<p class="h1">Fantastic!</p>
		<p>Easy peazy, lemon squeazy.</p>
		<a href="puzzle2.php" class="button">Proceed to the next puzzle &rarr;</a>
	</div>
 -->
	

<?php include('parts/footer.php'); ?>