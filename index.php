<?php session_start() ?>
<?php
if (!isset($_SESSION["valid"]) || $_SESSION["valid"] != true) {
    header("Location: login.php");
    die();
}
$num1 = rand(0, 20);   
$num2 = rand(0, 20);
$operands = rand(0, 1);
if ($operands == 0) {
    $operand = "+";
} else {
    $operand = "-";
}
if (!isset($_SESSION["score"])) {   
    $_SESSION["score"] = 0;
}
if (!isset($_SESSION["total"])) {
    $_SESSION["total"] = 0;
}
if (!isset($_SESSION["correctMsg"])) {
    $_SESSION["correctMsg"] = null;
}
if (!isset($_SESSION["wrongMsg"])) {
    $_SESSION["wrongMsg"] = null;
}
?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Math Game</title>
        <link rel="stylesheet" href="style/bootstrap.min.css" media="screen">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container">
            <form action="calculate.php" method="post" role="form" class="form-horizontal">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4"><h1>Math Game</h1></div>
                    <div class="col-sm-4"><a href="logout.php" class="btn btn-default btn-sm">Logout</a></div>
                </div>
                <div class="row">
                    <label class="col-sm-1 col-sm-offset-4"><?php echo $num1 ?></label>
                    <label class="col-sm-1"><?php echo $operand ?></label>
                    <label class="col-sm-2"><?php echo $num2 ?></label>
                    <div class="col-sm-5"></div>
                </div>
                <input type="hidden" name="first_number" value=<?php echo $num1 ?> />
                <input type="hidden" name="operation" value=<?php echo $operand ?> />
                <input type="hidden" name="second_number" value=<?php echo $num2 ?> />
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-4">
                        <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer" size="6">
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-4">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" name="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
            <hr />
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <span style="Color: green; font-weight: bold;"><?php echo $_SESSION["correctMsg"] ?></span>
                    <span style="Color: red; font-weight: bold;"><?php echo $_SESSION["wrongMsg"] ?></span>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">Score: <?php echo $_SESSION["score"] ?> / <?php echo $_SESSION["total"] ?></div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </body>
