<!DOCTYPE html>
<html>
<head>
	<title>Alexander Farrell - CS313 Homepage</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<link rel="stylesheet" href="styles.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
</head>

<body>
	<div class="container focusBackgroundColor stretchToEnd">
		<div class="centerTitle titleFontSize titleTopPadding">
			<h1>Alexander Farrell</h1>
			<h4>A homepage for the CS313 Class</h4>
		</div>
		<div class="row">
			<div class="col-sm-4 buttonBackgroundColor centerTitle normalFontSize">
				<a href="/index.html">Home</a>
			</div>
			<div class="col-sm-4 buttonBackgroundColor centerTitle normalFontSize">
				<a href="/about.html">About</a>
			</div>
			<div class="col-sm-4 buttonBackgroundColor centerTitle normalFontSize">
				<a href="/assignments.html">Assignments</a>
			</div>
		</div>
		<br>
		<div class="centerTitle titleFontSize">
			<h2>{$titleOfSubpage}</h2>
		</div>
		<br>
		{$contentsOfSubpage}
	</div>
</body>
</html>