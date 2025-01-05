<?php
    require 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
         <!-- Link to the external JavaScript file --> 
    <script src="signupValidation.js" defer></script>
    </head>
    <body>
        <h1>Please Sign Up Here</h1>
        <form id= "signUpForm" action="signUpResult.php" method="POST">
            <label for="username">Username: </label>
            <input type="text" id="username" name="username">
            <label for="password">Password: </label>
            <input type="password" id="password" name="password">
            <input type="submit" value="Sign Up!">

        </form>
    </body>
</html>
