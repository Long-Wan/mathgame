<?php session_start() ?>
<?php
unset($_SESSION["valid"]);
header("Location: login.php");
die();
session_destroy();
?>