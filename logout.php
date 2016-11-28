<?php session_start() ?>
<?php
$_SESSION = array();
header("Location: login.php");
die();
session_destroy();
?>