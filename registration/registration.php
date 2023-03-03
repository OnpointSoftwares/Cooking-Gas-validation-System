<?php
require_once ('config.php'); // For storing username and password.

session_start();
?>

<!-- HTML code for Bootstrap framework and form design -->

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/signin.css">
    <title>Sign in</title>
</head>
<body style="background-color: goldenrod">
<div class="container" style="border:2px solid black;opacity: .9;border-radius: 20px">
    <form action="registrationsave.php" method="POST" name="Login_Form" class="form-signin" style="border:3px solid black">
        <h1 style="font-weight: bold">Gas Validation System</h1>
        <h2 class="form-signin-heading">Please sign up</h2>
        <label for="inputUsername" class="sr-only">Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <label for="inputPassword" class="sr-only">Confirm Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Confirm Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" type="submit">Sign up</button>
        <a class="btn btn-lg btn-danger btn-block" href="../login.php">Login</a>
    
                &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><?php 
                    echo $_SESSION['statusFail']; ?>
                </div>
                  &nbsp;
                <div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong><?php echo $_SESSION['statusSuccess']; ?>
                </div>
        

    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
