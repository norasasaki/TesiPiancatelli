<?php
session_start();
$idslot = $_REQUEST["name"];
setcookie($idslot, false);
unset($_SESSION[$idslot]);
?>