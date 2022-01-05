<html lang="IT">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>SALVATAGGI V.1</title>
	<script type="text/javascript" src="salvataggi.js"></script>
	<link rel="stylesheet" href="stylegraphic.css" />
	
	<?php
		session_start();
	?>
  </head>
	<body>
		<header>
			<nav>
				<ul>
					<li><a href="index.php">Gioco</a></li>
					<li><a href="salvataggi.php">Salvataggi</a></li>
					<li><a href="badges.php">Obbiettivi</a></li>
					<li><a href="about.html">About</a></li>
				</ul>
			</nav>
		</header>
	<div id="containerbase" > 
		<div id="Save1" class="slotsave">
			<div id="attualsave1" class="saving">
				<p>
				<?php
				if (!isset($_COOKIE['Save1'])) { ?>
					Salva Partita
				<?php
				} else {
					echo $_COOKIE['Save1'];
				}
				?>
				</p>
			</div>
			<button class="loadnew">&#10515;</button>
			<button class="deletattual"> &#9746; </button>
		</div>
		<div id="Save2" class="slotsave">
			<div id="attualsave2" class="saving"> 
				<p>
				<?php
				if (!isset($_COOKIE['Save2'])) { ?>
					Salva Partita
				<?php
				} else {
					echo $_COOKIE['Save2'];
				}
				?>
				</p>
			</div>
			<button class="loadnew"> &#10515; </button>
			<button class="deletattual"> &#9746; </button>
		</div>
		<div id="Save3" class="slotsave">
			<div id="attualsave3" class="saving">
				<p>
				<?php
				if (!isset($_COOKIE['Save3'])) { ?>
					Salva Partita
				<?php
				} else {
					 echo $_COOKIE['Save3'];
				}
				?>
				</p>
			</div>
			<button class="loadnew"> &#10515; </button>
			<button class="deletattual"> &#9746;</button>
		</div>
	</div>
	</body>
</html>