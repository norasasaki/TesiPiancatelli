<?php
session_start();

setcookie("Current_save", "sezione1", time() + (10 * 365 * 24 * 60 * 60) );
$_SESSION['Current_save'] = "sezione1";
echo $_SESSION['Current_save'];

?>