<?php session_start() ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Math Game</title>
        <link rel="stylesheet" href="style/bootstrap.min.css" media="screen">
        <meta charset="utf-8">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-sm-10 col-sm-offset-1">
                    <h1>Please login to play the math game</h1>
                </div>  
                <div class="col-sm-1"></div>
            </div>
            <form action="authenticate.php" method="post" role="form" class="form-horizontal">
                <div class="form-group">
                    <div class="col-sm-3 text-right">Email:</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="email" name="email"
                        placeholder="Enter your email" size="6">
                    </div>
                    <div class="col-sm-5"></div>
                </div>
                <div class="form-group">
                    <div class="col-sm-3 text-right">Password:</div>
                    <div class="col-sm-4">
                        <input type="text" class="form-control" id="passworld" name="password"
                        placeholder="Enter your password" size="6">
                    </div>
                    <div class="col-sm-5"></div> 
                </div>
                <div class="row">
                    <div class="col-sm3 col-sm-offset-4">
                        <button type="submit" class="btn btn-primary">Login</button>
                    </div>
                </div>
                <div class="row">
                    <p class="col-sm3 col-sm-offset-4"><?php $_SESSION["msg"] ?></p>
                </div>
            </form>
        </div>
    </body>