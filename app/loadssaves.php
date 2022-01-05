<?php
session_start();
$idslot = $_REQUEST["name"];
$valuess = $_COOKIE['Current_save'];
setcookie($idslot, $valuess, time() + (10 * 365 * 24 * 60 * 60) );
$_SESSION[$idslot] = $valuess;
echo $_SESSION[$idslot];
?>