<!doctype html>
<html lang="IT">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>PINOCCHIO Text Adventure</title>
	
	 <link rel="stylesheet" href="stylegraphic.css" />
	<script type="text/javascript" src="gameplay.js"></script>

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
	<div id="containerreset">
		<button id="resetsgame" class="resetbutton" onClick="resetf($(this))" type="button" > RESET <div id="resetS">&#8634;</div></button>
	</div>
	<div id="containerbase">
		<div id="scene" class="scenes"> 
	
		</div>
	</div>
	</body>
</html>