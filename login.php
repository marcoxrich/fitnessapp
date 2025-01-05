<?php //https://www.w3schools.com/php/php_sessions.asp
    require 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1> Please Log In </h1>
        <form action="loginResult.php" method="POST">
            <label for="username">Username: </label>
            <input type="text" id="username" name="username">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Log In">
        </form>
        <p>Don't have an account? </p>
        <a id="signupredirect" href="signUp.php">Sign up here!</a>
    </body>
</html>
