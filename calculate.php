<?php session_start() ?>
<?php
if (isset($_POST["submit"])) {
    unset($_SESSION["wrongMsg"]);
    unset($_SESSION["correctMsg"]);
    if ($_POST["operation"] == "-") {
        $correctAnswer = $_POST["first_number"] - $_POST["second_number"];
    } 
    else if ($_POST["operation"] == "+") {
        $correctAnswer = $_POST["first_number"] + $_POST["second_number"];
    }
    if ($_POST["answer"] == $correctAnswer ) {
        $_SESSION["correctMsg"] = "Correct";
        $_SESSION["score"] = $_SESSION["score"] + 1;
        $_SESSION["total"] = $_SESSION["total"] + 1;
        header("Location: index.php");
        die();
    } else if (!is_numeric($_POST["answer"])) {
        $_SESSION["wrongMsg"] = "Answer is not a number";
        header("Location: index.php");
        die();
    } else {
        $_SESSION["wrongMsg"] = "Incorrect, answer: " . $correctAnswer;
        $_SESSION["total"] = $_SESSION["total"] + 1;
        header("Location: index.php");
        die();
    }
}
?>