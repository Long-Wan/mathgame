<?php session_start() ?>
<?php
$_SESSION["msg"] = "";
if (isset($_POST["submit"])) {
    if (empty($_POST["email"]) || empty($_POST["password"]) || $_POST["email"] != "a@a.a" || $_POST["password"] != "aaa") {
        $_SESSION["msg"] = "Invalid login credentials";
        header("Location: login.php");
        die();
    }
    else {
        header("Location: index.php");
        die();
    }
}
?>