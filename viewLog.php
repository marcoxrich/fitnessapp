<?php //https://www.w3schools.com/php/php_sessions.asp
    include "dbInfo.php";
    require 'header.php';

    if($_SESSION["username"] == "") {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>View Log</h1>

        <?php

        // Create connection
        $conn = new mysqli($servername, $username, $password, $dbname);
        // Check connection
        if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
        }

        $sql = "SELECT actId, type, duration, distance, calories, date FROM activities WHERE userId = 
                    (SELECT id FROM users WHERE uname = '{$_SESSION["username"]}')";
        $result = $conn->query($sql);


        if ($result->num_rows > 0) {
            // output data of each row
            echo "<table>";
            echo "<tr>
                    <th>ID</>
                    <th>Activity</th>
                    <th>Duration</th>
                    <th>Distance</th>
                    <th>Calories</th>
                    <th>Date</th>
                </tr>";
            
            while($row = $result->fetch_assoc()) {
                echo "<tr>
                            <td>" . $row["actId"] . "</td>
                            <td>" . $row["type"] . "</td>
                            <td>" . $row["duration"] . "</td>
                            <td>" . $row["distance"] . "</td>
                            <td>" . $row["calories"] . "</td>
                            <td>" . $row["date"] . "</td>
                        </tr>";
            }
    
            echo "</table>";

        } else {
        echo "0 results";
        }
        $conn->close();
        ?> 
    </body>
</html>