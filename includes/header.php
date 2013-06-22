<?php require_once('util/lock.php'); ?>
<!doctype html>
<html>
<head>
	<title>BreweryKeeper</title>

	<link href='http://fonts.googleapis.com/css?family=Lato:400,700|Lobster' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="css/style.css">
	
</head>
<body>

<header id="banner">
	<div class="title-container">
		<h1 class="site-title">BreweryKeeper</h1>
	</div>
	
	<div class="account-nav">
		<?php include('includes/login-navigation.php'); ?>
	</div><!-- .account-nav -->

	<div class="banner-container">
		<h2>Keep track of the breweries you've visited</h2>
	</div>
</header>

<div class="container">
	<nav id="main-nav">
		<ul>
			<li><a href="my-breweries.php">My Breweries</a></li>
			<li><a href="brewery-list.php">List of Breweries</a></li>
		</ul>
	</nav>