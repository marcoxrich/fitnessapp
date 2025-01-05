<?php //https://www.w3schools.com/php/php_sessions.asp
    require 'header.php';

    if($_SESSION["username"] == "") {
        header("Location: index.php");
    }
?>

<!DOCTYPE html>
<html>
    <head>
        <!-- Link the JavaScript file -->
    <script src="logActivityValidation.js" defer></script>
    </head>
    <body>
        <h1>Log Activity</h1>
        
        <p> Please fill out the form below to document the workout you have just completed </p>

        <form action="logResult.php" method="POST">
            <label for="activity">Activity Name:</label><br>
            <input type="text" id="activity" name="activity" required><br><br>

            <label for="duration">Duration:</label><br>
            <input type="number" id="duration" name="duration" min="0" step="0.01" required>
            <select id="dur_unit" name="dur_unit">
                <option value="Minutes">Minutes</option>
                <option value="Hours">Hours</option>
            </select><br><br>

            <label for="distance">Distance: (default is 0)</label><br>
            <input type="number" id="distance" name="distance" min="0" step="0.01" value="0">
            <select id="dist_unit" name="dist_unit">
                <option value="Miles">Miles</option>
                <option value="Kilometers">Kilometers</option>
            </select><br><br>

            <label for="calories">Calories Burned:</label><br>
            <input type="number" id="calories" name="calories" min="0" step="1" required><br><br>

            <label for="date">Date: (yyyy-mm-dd)</label><br>
            <input type="date" id="date" name="date" required><br><br>
            
            <input type="submit">
        </form>
        
    </body>
</html>
