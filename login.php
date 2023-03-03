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
    <title>Login in</title>
</head>
<body style="background-color: goldenrod">
<div class="container" style="border:2px solid black;opacity: .9;border-radius: 20px">
    <form action="logincheck.php" method="POST" name="Login_Form" class="form-signin" style="border:3px solid black">
        <h1 style="font-weight: bold">Gas Validation System</h1>
        <h2 class="form-signin-heading">Please sign in</h2>
        <a href="admin/" class="btn btn-secondary">Login as admin</a>
        <label for="inputUsername" class="sr-only">Username</label>
        <input name="Username" type="username" id="inputUsername" class="form-control" placeholder="Username" required autofocus>
        <label for="inputPassword" class="sr-only">Password</label>
        <input name="Password" type="password" id="inputPassword" class="form-control" placeholder="Password" required>
        <div class="checkbox">
            <label>
                <input type="checkbox" value="remember-me"> Remember me
            </label>
        </div>
        <button name="Submit" value="Login" class="btn btn-lg btn-primary btn-block" name="login" type="submit">Login</button>
        <a class="btn btn-lg btn-danger btn-block" href="registration/registration.php">Sign Up</a>

    </form>
</div>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="js/bootstrap.min.js"></script>
</body>
</html>
