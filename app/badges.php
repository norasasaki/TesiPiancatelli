<html lang="IT">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<title>Badges</title>
	<link rel="stylesheet" href="stylegraphic.css" />
	<script type="text/javascript" src="moreinfo.js"></script>
	
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
					<li><a href="x.html">About</a></li>
				</ul>
			</nav>
		</header>
	<div id="containerbase" class="obbiettivis" > 
		<div id="Ends">
			<div class="Types"><b>Badges Finali Raggiunti</b></div>
			<div id="FinaleNegativo1" class="badges">
				<?php
				if (!isset($_COOKIE['FinaleNegativo1'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/FinaleChiuso.png">
				<?php
				} else {
				?>
				<img id="Negativo1" class = "stampok" src="badges/FinaleNegativo1.png" >
				<div id="more"></div>
				<?php
				}
				?>
			</div>
			<div id="FinaleNegativo2" class="badges">
				<?php
				if (!isset($_COOKIE['FinaleNegativo2'])) { ?>
				<img id="Chiuso" class = "stamp" src="badges/FinaleChiuso.png">
				<?php
				} else {
				?>
				<img id="Negativo2" class = "stampok" src="badges/FinaleNegativo2.png">
				<?php
				}
				?>
			</div>
			<div id="MorteQuercia" class="badges">
				<?php
				if (!isset($_COOKIE['MorteQuercia'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/FinaleChiuso.png">
				<?php
				} else {
				?>
				<img id="Mortequercia" class = "stampok" src="badges/MorteallaQuercia.png">
				<?php
				}
				?>
			</div>
			<div id="FinalePositivo1" class="badges">
				<?php
				if (!isset($_COOKIE['FinalePositivo1'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/FinaleChiuso.png">
				<?php
				} else {
				?>
					<img id="Positivo1" class = "stampok" src="badges/FinalePositivo1.png">
				<?php
				}
				?>
			</div>
			<div id="FinalePositivo2" class="badges">
				<?php
				if (!isset($_COOKIE['FinalePositivo2'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/FinaleChiuso.png">
				<?php
				} else {
				?>
					<img id="Positivo2" class = "stampok" src="badges/FinalePositivo2.png">
				<?php
				}
				?>
			</div>
			<div id="FinaleNeutro" class="badges">
				<?php
				if (!isset($_COOKIE['FinaleNeutro'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/FinaleChiuso.png">
				<?php
				} else {
				?>
				<img id="Neutro" class = "stampok" src="badges/FinaleNeutro.png">
				<?php
				}
				?>
			</div>
			<div id="FinaleTrue" class="badges">
				<?php
				if (!isset($_COOKIE['FinaleTrue'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/FinaleChiuso.png">
				<?php
				} else {
				?>
					<img id="Finalevero" class = "stampok" src="badges/TrueFinale.png">
				<?php
				}
				?>
			</div>
		</div>
		
		<div id="Personaggi">
			<div class="Types"><b>Badges Personaggi Incontrati</b></div>
			<div id="Grillo" class="badges">
				<?php
				if (!isset($_COOKIE['Grillo'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/PersonaggioChiuso.png">
				<?php
				} else {
				?>
				<img id="Grillook" class = "stampok"  src="badges/GrilloParlante.png">
				<?php
				}
				?>
			</div>
			<div id="Fata" class="badges">

				<?php
				if (!isset($_COOKIE['Fata'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/PersonaggioChiuso.png">
				<?php
				} else {
				?>
				<img id="Fataok" class = "stampok"  src="badges/FataTurchina.png">
				<?php
				}
				?>
			</div>
			<div id="Mangiafuoco" class="badges">
				<?php
				if (!isset($_COOKIE['Mangiafuoco'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/PersonaggioChiuso.png">
				<?php
				} else {
				?>
				<img id="Mangiafuocook" class = "stampok"  src="badges/Mangiafuoco.png">
				<?php
				}
				?>
			</div>
			<div id="GattoVolpe" class="badges">
				<?php
				if (!isset($_COOKIE['GattoVolpe'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/PersonaggioChiuso.png">
				<?php
				} else {
				?>
				<img id="gattovolpeok" class = "stampok"  src="badges/gattoevolpe.png">
				<?php
				}
				?>
			</div>
			<div id="Lucignolo" class="badges">
				<?php
				if (!isset($_COOKIE['Lucignolo'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/PersonaggioChiuso.png">
				<?php
				} else {
				?>
				<img id="Lucignolook" class = "stampok"  src="badges/Lucignolo.png">
				<?php
				}
				?>
			</div>
			<div id="Pescecane" class="badges">
				<?php
				if (!isset($_COOKIE['Pescecane'])) { ?>
					<img id="Chiuso" class = "stamp" src="badges/PersonaggioChiuso.png">
				<?php
				} else {
				?>
				<img id="Pescecaneok" class = "stampok"  src="badges/Pescecane.png">
				<?php
				}
				?>
			</div>
		</div>
		
	</div>
	</body>
</html>