<?php
session_start();

if (!isset($_COOKIE['Current_save']) ) {
	setcookie("Current_save", "sezione1", time() + (10 * 365 * 24 * 60 * 60) );
	$_SESSION['Current_save'] = "sezione1";
	echo $_SESSION['Current_save'];
} else {
	$_SESSION['Current_save'] = $_COOKIE['Current_save'];
	echo $_COOKIE['Current_save'];
}
?>