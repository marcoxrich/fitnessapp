<?php //https://www.w3schools.com/php/php_sessions.asp
    require 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
         <!-- Link to the external JavaScript file --> 
    </head>
    <body>
        <h1>
            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
                <h1>
                    Welcome home, <?php echo $_SESSION["username"]; ?>!
                </h1>
            <?php else: ?>
                <h1> Welcome to Fitness Manager! </h1>
                <h3> To access features, please login or sign up here: </h3>
                <a id="signupredirect" href="login.php">login</a><a id="signupredirect" href="signUp.php">signup</a>
            <?php endif; ?>
        </h1>
    </body>
</html>
