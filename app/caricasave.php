<?php
session_start();

$idslot = $_REQUEST["name"];
if (!isset($_COOKIE[$idslot])) {
	echo"Nessuna partita salvata";
} else {
	$valuess = $_COOKIE[$idslot];
	setcookie("Current_save", $valuess, time() + (10 * 365 * 24 * 60 * 60) );
}
?>