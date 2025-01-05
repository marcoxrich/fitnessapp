<?php //https://www.w3schools.com/php/php_sessions.asp

    include "dbInfo.php";
    require 'header.php';


        $conn = new mysqli($servername, $username, $password, $dbname);

        if ($conn->connect_error) {
            die("Connection Failed". $conn->connect_error);
        }

        $stmt = "SELECT uname, pword FROM users WHERE uname='{$_POST["username"]}' AND pword='{$_POST["password"]}'";
        $result = $conn->query($stmt);
        
        if ($result->num_rows > 0) {
            $_SESSION["username"] = $_POST["username"];
            $_SESSION["password"] = $_POST["password"];

            header("Location: home.php");
        }
        else {
            echo"<p>Invalid Credentials!</p><br><a href='login.php'>Try Again!</a>";
        }
          
        $conn->close();

    

    exit();

?>