<!DOCTYPE html>
<html>
	<head>
		<title>Accueil My Meetic</title>
		<meta name="author" content="rubio_n">
		<meta charset="utf-8" />
		<link rel="icon" type="image/x-icon" href="img/favicon.ico" />
		<link rel="stylesheet" href="css/style.css" />
		<script type="text/javascript" src="js/js.js"></script>
	</head>
	<body>
		<nav>
			<div class="logo" id="logo">
				<a href="index.php">My Meetic</a>
			</div>
			<div class="log" id="log" onclick="deco('log')" onmouseout="leavedeco('log')">
				<p>Connect&eacute; : <?php echo $logged['pseudo']; ?></p>
			</div>
			<ul>
				<li><a href="index.php?page=recherche">Recherche</a></li>
				<li><a href="index.php?page=profil">Mon profil</a></li>
			</ul>
		</nav>
		<div class="container">
		