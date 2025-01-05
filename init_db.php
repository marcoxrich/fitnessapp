<?php
    include "../dbInfo.php";

    $conn = new mysqli($servername, $username, $password);

    $conn->query("DROP DATABASE IF EXISTS fitness_tracker");

    $stmt = $conn->prepare("CREATE DATABASE $dbname;");
    $stmt->execute();
    $conn->close();

    $conn = new mysqli($servername, $username, $password, $dbname);
    $sql = "
    CREATE TABLE activities
    (
    actId   INT unsigned    NOT NULL    AUTO_INCREMENT,
    userId  INT unsigned    NOT NULL,
    type    VARCHAR(150)    NOT NULL,
    duration    VARCHAR(150)    NOT NULL,
    distance    VARCHAR(150)    NOT NULL,
    calories  INT unsigned    NOT NULL,
    date        DATE    NOT NULL,
    PRIMARY KEY     (actId)
    );
    CREATE TABLE users
    (
    id  INT unsigned    NOT NULL    AUTO_INCREMENT,
    uname   VARCHAR(150)    NOT NULL,
    pword   VARCHAR(150)    NOT NULL,
    PRIMARY KEY     (id)
    );";
    if($conn->multi_query($sql) === TRUE && $conn->next_result() === TRUE) {
        $conn->close();
        header("Location: ../home.php");
    }
    else {
        echo "didnt work!";
        $conn->close();
    }
?>