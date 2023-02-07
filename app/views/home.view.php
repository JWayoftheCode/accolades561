<!doctype html>
<html lang="en" class="h-100">
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<meta name="description" content="">
		<meta name="generator" content="Hugo 0.88.1">
		<title>Cover Template ? Bootstrap v5.1</title>
		
		
		
		
		<!-- Bootstrap core CSS -->
		<link href="<?=ROOT?>/assets/css/bootstrap.min.css" rel="stylesheet">
		
		<style>
			.bd-placeholder-img {
				font-size: 1.125rem;
				text-anchor: middle;
				-webkit-user-select: none;
				-moz-user-select: none;
				user-select: none;
			}

			@media (min-width: 768px) {
				.bd-placeholder-img-lg {
					font-size: 3.5rem;
				}
			}
		</style>
		
		
		<!-- Custom styles for this template -->
		<link href="<?=ROOT?>/assets/css/cover.css" rel="stylesheet">
		
		<!--	Timer 	-->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
		<script type="text/javascript" src="<?=ROOT?>/assets/TimeCircles.js"></script>
		<link href="<?=ROOT?>/assets/TimeCircles.css" rel="stylesheet">
	
	</head>
	<body class="d-flex h-100 text-center text-white bg-dark">
		
		<div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column">
			<header class="mb-auto">
				<div>
					<h3 class="float-md-start mb-0">Cover</h3>
					<nav class="nav nav-masthead justify-content-center float-md-end">
						<a class="nav-link active" aria-current="page" href="<?=ROOT?>">Home</a>
						<a class="nav-link" href="<?=ROOT?>/login">Login</a>
						<a class="nav-link" href="<?=ROOT?>/logout">Logout</a>
					</nav>
				</div>
			</header>
			
			<main class="px-3">
				<h4>Hi, <?=$username?></h4>
				<h1>Cover your page.</h1>
				<p class="lead">Cover is a one-page template for building simple and beautiful home pages. Download, edit the text, and add your own fullscreen background photo to make it your own.</p>
				<p class="lead">
					<a href="#" class="btn btn-lg btn-secondary fw-bold border-white bg-white">Learn more</a>
				</p>
			</main>
			<!--	Timer Div		-->
			<div data-date="<?php echo $date; ?>" id="count-down"><?php echo $date; ?></div>
			
			<footer class="mt-auto text-white-50">
				<p>Cover template for <a href="https://getbootstrap.com/" class="text-white">Bootstrap</a>, by <a href="https://twitter.com/mdo" class="text-white">@mdo</a>.</p>
			</footer>
		</div>
	
	</body>
	
	<script>
		$(function () {
			$("#count-down").TimeCircles();
		});
	</script>
	
</html>
