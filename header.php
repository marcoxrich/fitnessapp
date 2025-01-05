<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta name="viewport" content="device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="header">
        <div class="left">
            <a href="home.php">Home</a>
        </div>

        <div class="center">
            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
                <a href="viewLog.php">View Activity Log</a>
                <a href="logActivity.php">Register Activity</a>
            <?php endif; ?>
        </div>

        <div class="right">
            <?php if (isset($_SESSION['username']) && !empty($_SESSION['username'])): ?>
                <a href="logout.php">Logout</a>
            <?php else: ?>
                <a href="login.php">Login</a>
                <a href="signUp.php">Sign Up</a>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>
