<!DOCTYPE html>
<?php 
include "config/menu.php";
?>
<html lang="it">
<head>
<meta charset="utf-8">
<title>InsomniaLab | Hacklab universitario</title>
<!-- The below script Makes IE understand the new html5 tags are there and applies our CSS to it -->
<!--[if IE]>
  <script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<link rel="stylesheet" href="style.css" />
<link rel="stylesheet" href="stylesheets/unsemantic-grid-responsive-rtl.css" />
</head>
<body>
<div id="canvas" class="grid-container">

	<header id="head">
		<a href="index.php" title="InsomniaLab | Hacklab universitario">
		<img width="50%" height="30%" src="images/trasparente-01.png" alt="InsomniaLab | Hacklab universitario" />
		</a>

		<nav>
			<div class="container">
	            <ul id="nav">
	                <?php
	                menu();
	                ?>
            	</ul>
        	</div>
		</nav>

	</header>
	
	<section id="content" class="grid-100 mobile-grid-100">

		<header>
			
			<hgroup>
			<h2>Content Box</h2>
				<h3>/</h3>
			</hgroup>
		</header>

		<article>
			
			<p>
			Questo è un giovanissimo sito internt, sito creato per lanciare nel mondo del Web il progetto dell InsomniaLab, progetto nato
			dalla mente di studenti (e non) che vivono la quotidianità all' interno della Sapienza.

			<h1 style="text-align:center;">Presentazione dell' Hacklab</h1>
			<div style="text-align: center;"><img src="media/festa143web-01.png" alt="Festa di Presentazione di InsomniaLab" /></div>
			</p>
			
		</article>
		
	</section>

	<footer>
	<p>Insomnia Lab - cogitoergohack@autistici.org</p>
	</footer>
</div>
</body>
</html>

