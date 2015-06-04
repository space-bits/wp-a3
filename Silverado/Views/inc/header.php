<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>Home - Silverado Cinema</title>

	<!-- Normalize -->
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/3.0.3/normalize.css"> -->

	<!--Google Web Fonts taken from http://www.google.com/fonts/. Obtained under license for educational purposes. -->
	<link href="//fonts.googleapis.com/css?family=Pacifico" rel='stylesheet' type='text/css'>
	<link href="//fonts.googleapis.com/css?family=Cabin:500" rel='stylesheet' type='text/css'>

	<!-- Main stylesheet -->
	<link rel="stylesheet" href="<?= getAssetUri('static/css/style.css'); ?>">

	<!-- Viewport for responsible layout -->
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<body>
	<!-- ########## Header ########## -->
	<?php include_once('session-nav.php'); ?>
	<header class="wrapper">
		<h1 class="header-light-shadow half-wrapper">
			<a href="<?= getBaseUri(); ?>">Silverado Cinema</a>
		</h1>
		<nav class="half-wrapper">
			<ul class="header-light-shadow">
				<li><a href="<?= getBaseUri(); ?>">Home</a></li>
				<li><a href="<?= getBaseUri(); ?>movie">Movies</a></li>
				<li><a href="<?= getBaseUri(); ?>contact">Contact</a></li>
				<li><a href="<?= getBaseUri(); ?>cart">Cart</a></li>
			</ul>
		</nav>
	</header>
