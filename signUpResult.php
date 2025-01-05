

<?php //https://www.w3schools.com/php/php_sessions.asp
    include "dbInfo.php";
    require 'header.php';
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <?php 

        $uname = $_POST["username"];
        $pword = $_POST["password"];

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        //uname cannot be empty, or only spaces
        if (($uname !="" & trim($uname) != "") & ($pword !="" & trim($pword) != "" )  ){
            

            $stmt = $conn->prepare("INSERT INTO users (uname, pword) VALUES (?, ?)");
            $stmt->bind_param("ss", $uname, $pword);
            $stmt->execute();

            $conn->close();

            $_SESSION["username"] = $uname;
            $_SESSION["password"] = $pword;


            echo"<h2>" . $_SESSION["username"] . " successfully created! return home <a id=homeredirect href='home.php'>here</a>.</h2>";
        }
        else {
            echo"Invalid username or password";
            echo"<br><a href='signUp.php'>Try Again</a>";
        }

        ?>

    </body>
</html>
