<?php
session_start();
$idsezione = $_REQUEST["sezione"];
if (isset($_COOKIE['Current_save']) ) {
	setcookie("Current_save", $idsezione, time() + (10 * 365 * 24 * 60 * 60) );
	$_SESSION['Current_save'] =  $idsezione;
	if ($idsezione == "MorteQuercia" || $idsezione == "FinaleTrue" || $idsezione == "FinaleNeutro" ||$idsezione == "FinalePositivo1" ||$idsezione == "FinalePositivo2"||$idsezione == "FinaleNegativo1" ||$idsezione == "FinaleNegativo2" ) {
		setcookie($idsezione, "1", time() + (10 * 365 * 24 * 60 * 60) );
	}
	if ($idsezione == "Sezione4" || $idsezione == "Sezione25") {
		setcookie("Grillo", "1", time() + (10 * 365 * 24 * 60 * 60) );
	}
	if ($idsezione == "Sezione8" ) {
		setcookie("Mangiafuoco", "1", time() + (10 * 365 * 24 * 60 * 60) );
	}
	if ($idsezione == "Sezione11" ) {
		setcookie("GattoVolpe", "1", time() + (10 * 365 * 24 * 60 * 60) );
	}
	if ($idsezione == "Sezione15" || $idsezione == "Sezione6b" ) {
		setcookie("Fata", "1", time() + (10 * 365 * 24 * 60 * 60) );
	}
	if ($idsezione == "Sezione22") {
		setcookie("Lucignolo", "1", time() + (10 * 365 * 24 * 60 * 60) );
	}
		if ($idsezione == "Sezione24") {
		setcookie("Pescecane", "1", time() + (10 * 365 * 24 * 60 * 60) );
	}
	
	echo $_SESSION['Current_save'];
}

?>