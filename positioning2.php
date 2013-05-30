<!doctype html>
<html lang="us">
<head>
	<meta charset="utf-8">
	<title>Web 101 HTML Puzzle</title>
	<link href="css/flick/jquery-ui-1.10.3.custom.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">
	
</head>

<body>


	<ul class="pos-puz clearfix content">
		<li><p class="h1">Hey there!</p></li>
		<li><img src="http://placebear.com/300/300"></li>
		<li><img src="http://placesheen.com/200/100"></li>
		<li><p>Jericho was a city in biblical times.</p></li>
		<li>Sed posuere consectetur est at lobortis. Nullam id dolor id nibh ultricies vehicula ut id elit. Etiam porta sem malesuada magna mollis euismod. Praesent commodo cursus magna, vel scelerisque nisl consectetur et.</li>
		<li><img src="http://placekitten.com/400/300"></li>
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
		<div class="display clearfix">
			<span class="blue-button" id="disInline">inline</span>
			<span class="blue-button" id="disBlock">block</span>
			<span class="blue-button" id="disInlBlock">inline-block</span>
		</div>
		<div class="box-sizing clearfix">
			<span class="button selected" id="borderBox">border-box</span>
			<span class="button" id="contentBox">content-box</span>
		</div>
		<div class="reset">
			<hr />
			<span class="button" id="reset">Reset Coordinates</span>
			<span><a href="positioning.php" class="button">&larr; Back</a></span>
		</div>

	</div>
	

<?php include('parts/footer.php'); ?>