<?php session_start() ?>
<?php
$num1 = rand(0, 20);   
$num2 = rand(0, 20);   
$score = 0;
$total = 0;
$operands = array("+", "-");
$operand = $operands[rand(0,1)];
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
            <form action="index.php" method="post" role="form" class="form-horizontal">
                <div class="row">
                    <div class="col-sm-4 col-sm-offset-4"><h1>Math Game</h1></div>
                    <div class="col-sm-4"><a href="logout.php" class="btn btn-default btn-sm">Logout</a></div>
                </div>
                <div class="row">
                    <label class="col-sm-2 col-sm-offset-3">$num1</label>
                    <label class="col-sm-2">$operand</label>
                    <label class="col-sm-2">$num2</label>
                    <div class="col-sm-3"></div>
                </div>
                <input type="hidden" name="first_number" value="$num1" />
                <input type="hidden" name="operation" value="$operand" />
                <input type="hidden" name="second_number" value="$num2" />
                <input type="hidden" name="total" value="$total" />
                <input type="hidden" name="score" value="$score" />
                <div class="form-group">
                    <div class="col-sm-3 col-sm-offset-4">
                        <input type="text" class="form-control" id="answer" name="answer" placeholder="Enter answer" size="6">
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="row">
                    <div class="col-sm-3 col-sm-offset-4">
                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                        <button type="submit" class="btn btn-primary btn-sm">Submit</button>
                    </div>
                    <div class="col-sm-3"></div>
                </div>
            </form>
            <hr />
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">
                    <span style="Color: green; font-weight: bold;">$msg</span>
                </div>
                <div class="col-sm-4"></div>
            </div>
            <div class="row">
                <div class="col-sm-4 col-sm-offset-4">Score: $score / $total</div>
                <div class="col-sm-4"></div>
            </div>
        </div>
    </body>
    <?php
    if ($operand = "+") {
        $correctAnswer = $num1 + $num2;
    } else {
        $correctAnswer = $num1 - $num2;
    }
    if ($_POST["answer"] == $correctAnswer ) {
        $msg = "Correct";
        $score++;
    } else {
        $msg = "Incorrect";
    }
    $total++;
    header("Location: index.php");
    die();
    ?>
