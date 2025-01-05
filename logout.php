<?php //https://www.w3schools.com/php/php_sessions.asp
    require 'header.php';

    $_SESSION["username"]="";
    $_SESSION["password"]="";

    header("Location: home.php");
    exit();
?>