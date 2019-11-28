<?php
function CreateDatabase(){
    $servername =       "localhost";
    $username   =       "root";
    $password   =       "";

    try {
        $conn = new PDO("mysql:host=$servername", $username, $password);
        //Set the PDO error mode to exception
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        //Create Database
        $sql = "CREATE DATABASE aspire";
        //Use exec() because no results are returned
        $conn->exec($sql);
        echo "Database created successfully<br>";
    }

    catch (PDOException $e) {
        echo $sql . "<br>" . $e->getMessage();
    }

    $conn = null;
}

?>